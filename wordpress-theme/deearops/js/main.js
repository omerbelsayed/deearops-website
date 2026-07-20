/* DeeAROps — shared behavior: nav, reveal, tabs, contact form */
(function () {
  "use strict";

  document.documentElement.classList.add("js");

  /* ---------- Mobile navigation ---------- */
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.querySelector(".site-nav");
  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var open = nav.classList.toggle("open");
      document.documentElement.classList.toggle("nav-open", open);
      document.body.classList.toggle("nav-open", open);
      toggle.setAttribute("aria-expanded", String(open));
    });
    nav.addEventListener("click", function (e) {
      if (e.target.tagName === "A") {
        nav.classList.remove("open");
        document.documentElement.classList.remove("nav-open");
        document.body.classList.remove("nav-open");
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  }

  /* ---------- Reveal on scroll ---------- */
  var reveals = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && reveals.length) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.classList.add("in");
            io.unobserve(en.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add("in"); });
  }

  /* ---------- Tabs ---------- */
  document.querySelectorAll("[data-tabs]").forEach(function (root) {
    var btns = root.querySelectorAll(".tab-btn");
    var panels = root.querySelectorAll(".tab-panel");
    function select(idx) {
      btns.forEach(function (b, i) {
        var on = i === idx;
        b.setAttribute("aria-selected", String(on));
        b.tabIndex = on ? 0 : -1;
        panels[i].hidden = !on;
      });
    }
    btns.forEach(function (b, i) {
      b.addEventListener("click", function () { select(i); });
      b.addEventListener("keydown", function (e) {
        var dir = e.key === "ArrowRight" ? 1 : e.key === "ArrowLeft" ? -1 : 0;
        if (!dir) return;
        e.preventDefault();
        var next = (i + dir + btns.length) % btns.length;
        select(next);
        btns[next].focus();
      });
    });
  });

  /* ---------- Technology ecosystem: category filters + detail modal ---------- */
  var ecoGrid = document.querySelector(".eco-grid");
  if (ecoGrid) {
    var ecoCards = ecoGrid.querySelectorAll(".eco-card");
    var ecoFilters = document.querySelectorAll(".eco-filter");
    ecoFilters.forEach(function (btn) {
      btn.addEventListener("click", function () {
        ecoFilters.forEach(function (b) { b.setAttribute("aria-selected", String(b === btn)); });
        var f = btn.dataset.filter;
        ecoCards.forEach(function (card) {
          card.hidden = f !== "all" && card.dataset.category !== f;
        });
      });
    });

    var ecoModal = document.getElementById("eco-modal");
    if (ecoModal && typeof ecoModal.showModal === "function") {
      var mMark = document.getElementById("eco-modal-mark");
      var mCat = document.getElementById("eco-modal-cat");
      var mTitle = document.getElementById("eco-modal-title");
      var mDesc = document.getElementById("eco-modal-desc");
      ecoCards.forEach(function (card) {
        card.addEventListener("click", function () {
          var mark = card.querySelector(".eco-mark");
          mMark.textContent = mark.textContent;
          mMark.style.setProperty("--eco-c", mark.style.getPropertyValue("--eco-c"));
          mCat.textContent = card.dataset.catLabel || "";
          mTitle.textContent = card.querySelector(".eco-name").textContent;
          mDesc.textContent = card.querySelector(".eco-hint").textContent;
          ecoModal.showModal();
        });
      });
      ecoModal.addEventListener("click", function (e) {
        if (e.target === ecoModal) ecoModal.close();
      });
      ecoModal.querySelectorAll(".eco-modal-close").forEach(function (btn) {
        btn.addEventListener("click", function () { ecoModal.close(); });
      });
    }
  }

  /* ---------- Contact form ---------- */
  // ponytail: no backend yet — set FORM_ENDPOINT to a POST endpoint when available;
  // until then submission falls back to a pre-filled mail draft to info@deearops.com.
  var FORM_ENDPOINT = "";
  var form = document.getElementById("contact-form");
  if (!form) return;

  var statusBox = document.getElementById("form-status");
  var submitBtn = form.querySelector("button[type=submit]");

  var validators = {
    name: function (v) { return v.trim().length >= 2 || "Please enter your full name."; },
    company: function (v) { return v.trim().length >= 2 || "Please enter your company name."; },
    email: function (v) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) || "Please enter a valid business email.";
    },
    phone: function (v) {
      return v.trim() === "" || /^[+\d][\d\s\-()]{6,19}$/.test(v.trim()) || "Please enter a valid phone number.";
    },
    interest: function (v) { return v !== "" || "Please choose an area of interest."; },
    message: function (v) { return v.trim().length >= 10 || "Please describe briefly how we can help (10+ characters)."; }
  };

  function fieldEl(name) { return form.elements[name]; }
  function errEl(name) { return document.getElementById("error-" + name); }

  function validateField(name) {
    var el = fieldEl(name);
    var res = validators[name](el.value);
    var ok = res === true;
    el.setAttribute("aria-invalid", ok ? "false" : "true");
    var err = errEl(name);
    if (err) {
      err.textContent = ok ? "" : res;
      err.classList.toggle("visible", !ok);
    }
    return ok;
  }

  Object.keys(validators).forEach(function (name) {
    var el = fieldEl(name);
    if (!el) return;
    el.addEventListener("blur", function () { validateField(name); });
    el.addEventListener("input", function () {
      if (el.getAttribute("aria-invalid") === "true") validateField(name);
    });
  });

  function showStatus(kind, text, withMailLink) {
    statusBox.className = "form-status visible " + kind;
    statusBox.textContent = "";
    var span = document.createElement("span");
    span.textContent = text;
    if (withMailLink) {
      var a = document.createElement("a");
      a.href = "mailto:info@deearops.com";
      a.textContent = "info@deearops.com";
      span.appendChild(document.createTextNode(" "));
      span.appendChild(a);
      span.appendChild(document.createTextNode("."));
    }
    statusBox.appendChild(span);
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    statusBox.className = "form-status";

    var allOk = true;
    var firstBad = null;
    Object.keys(validators).forEach(function (name) {
      if (!validateField(name)) {
        allOk = false;
        if (!firstBad) firstBad = fieldEl(name);
      }
    });
    if (!allOk) {
      firstBad.focus();
      showStatus("error", "Please correct the highlighted fields and try again.");
      return;
    }

    var data = {
      name: fieldEl("name").value.trim(),
      company: fieldEl("company").value.trim(),
      email: fieldEl("email").value.trim(),
      phone: fieldEl("phone").value.trim(),
      interest: fieldEl("interest").value,
      message: fieldEl("message").value.trim()
    };

    submitBtn.classList.add("loading");
    submitBtn.setAttribute("aria-busy", "true");

    function done() {
      submitBtn.classList.remove("loading");
      submitBtn.removeAttribute("aria-busy");
    }

    if (FORM_ENDPOINT) {
      fetch(FORM_ENDPOINT, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
      })
        .then(function (r) {
          if (!r.ok) throw new Error("HTTP " + r.status);
          done();
          form.reset();
          showStatus("success", "Thank you, " + data.name.split(" ")[0] +
            ". Your message has been received — a DeeAROps specialist will contact you shortly.");
        })
        .catch(function () {
          done();
          showStatus("error", "Something went wrong sending your message. Please try again, or email", true);
        });
    } else {
      // Fallback: open a pre-filled email draft so the enquiry still reaches the team.
      var body =
        "Full name: " + data.name + "\n" +
        "Company: " + data.company + "\n" +
        "Business email: " + data.email + "\n" +
        "Phone: " + (data.phone || "-") + "\n" +
        "Area of interest: " + data.interest + "\n\n" +
        data.message;
      var href = "mailto:info@deearops.com?subject=" +
        encodeURIComponent("Website enquiry — " + data.interest + " — " + data.company) +
        "&body=" + encodeURIComponent(body);
      window.setTimeout(function () {
        done();
        window.location.href = href;
        showStatus("success", "Thank you, " + data.name.split(" ")[0] +
          ". Your email draft has been opened — send it and a DeeAROps specialist will get back to you. " +
          "If nothing opened, email", true);
      }, 500);
    }
  });
})();
