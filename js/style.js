document.addEventListener("DOMContentLoaded", function () {
  // Elements
  const header = document.getElementById("sassHeader");
  const mobileMenuButton = document.getElementById("sassMobileMenuButton");
  const mobileMenu = document.getElementById("sassMobileMenu");
  const mobileClose = document.getElementById("sassMobileClose");
  const overlay = document.getElementById("sassOverlay");
  const searchToggle = document.getElementById("sassSearchToggle");
  const searchOverlay = document.getElementById("sassSearchOverlay");
  const searchClose = document.getElementById("sassSearchClose");
  const searchInput = document.querySelector(".sass-search-input");
  const notificationBanner = document.getElementById("sassNotificationBar");
  const notificationClose = document.getElementById("sassNotificationClose");
  const notificationContent = document.getElementById(
    "sassNotificationContent"
  );
  const notificationItems = document.querySelectorAll(
    ".sass-notification-item"
  );
  const consultationButton = document.getElementById("sassConsultationButton");
  const statNumbers = document.querySelectorAll(".sass-stat-number");
  const suggestionTags = document.querySelectorAll(".sass-suggestion-tag");

  // Header Scroll Effect
  function handleScroll() {
    if (window.scrollY > 50) {
      header.classList.add("sass-scrolled");
    } else {
      header.classList.remove("sass-scrolled");
    }
  }

  window.addEventListener("scroll", handleScroll);

  // Initial header state check
  handleScroll();

  // Mobile Menu Toggle
  function toggleMobileMenu() {
    mobileMenu.classList.toggle("sass-active");
    overlay.classList.toggle("sass-active");

    // Toggle mobile menu button icon
    const icon = mobileMenuButton.querySelector("i");
    if (mobileMenu.classList.contains("sass-active")) {
      icon.classList.remove("fa-bars");
      icon.classList.add("fa-times");
      document.body.style.overflow = "hidden";
    } else {
      icon.classList.remove("fa-times");
      icon.classList.add("fa-bars");
      document.body.style.overflow = "";
    }
  }

  mobileMenuButton.addEventListener("click", toggleMobileMenu);
  mobileClose.addEventListener("click", toggleMobileMenu);

  overlay.addEventListener("click", function () {
    if (mobileMenu.classList.contains("sass-active")) {
      toggleMobileMenu();
    }

    if (searchOverlay.classList.contains("sass-active")) {
      searchOverlay.classList.remove("sass-active");
    }
  });

  // Mobile Dropdown
  const mobileDropdownToggles = document.querySelectorAll(
    ".sass-mobile-dropdown-toggle"
  );

  mobileDropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      const targetId = this.dataset.target;
      const target = document.getElementById(targetId);

      if (target.classList.contains("sass-active")) {
        target.classList.remove("sass-active");
        this.classList.remove("sass-active");
      } else {
        // Close all other dropdowns
        document
          .querySelectorAll(".sass-mobile-dropdown")
          .forEach((dropdown) => {
            dropdown.classList.remove("sass-active");
          });
        document
          .querySelectorAll(".sass-mobile-dropdown-toggle")
          .forEach((btn) => {
            btn.classList.remove("sass-active");
          });

        // Open this dropdown
        target.classList.add("sass-active");
        this.classList.add("sass-active");
      }
    });
  });

  // Search Overlay
  searchToggle.addEventListener("click", function () {
    searchOverlay.classList.add("sass-active");
    setTimeout(() => {
      searchInput.focus();
    }, 300);
  });

  searchClose.addEventListener("click", function () {
    searchOverlay.classList.remove("sass-active");
  });

  // Search Suggestions
  suggestionTags.forEach((tag) => {
    tag.addEventListener("click", function () {
      searchInput.value = this.textContent;
      searchInput.focus();
    });
  });

  // Notification Banner
  let currentNotificationIndex = 0;

  notificationClose.addEventListener("click", function () {
    notificationBanner.style.display = "none";

    // Store in session storage so it doesn't show again in this session
    sessionStorage.setItem("notificationClosed", "true");
  });

  // Check if notification was closed in this session
  if (sessionStorage.getItem("notificationClosed") === "true") {
    notificationBanner.style.display = "none";
  }

  // Rotate notifications
  function rotateNotifications() {
    currentNotificationIndex =
      (currentNotificationIndex + 1) % notificationItems.length;
    notificationContent.style.transform = `translateX(-${
      currentNotificationIndex * 100
    }%)`;
  }

  // Change notification every 5 seconds
  setInterval(rotateNotifications, 5000);

  // Consultation Button Animation
  consultationButton.addEventListener("mouseenter", function () {
    this.classList.add("sass-pulse");
  });

  consultationButton.addEventListener("mouseleave", function () {
    this.classList.remove("sass-pulse");
  });

  // Stats Counter Animation
  function animateStats() {
    statNumbers.forEach((stat) => {
      const target = parseInt(stat.getAttribute("data-count"));
      const duration = 2000; // 2 seconds
      const step = target / (duration / 16); // 16ms per frame (approx 60fps)
      let current = 0;

      const updateCounter = () => {
        current += step;
        if (current < target) {
          stat.textContent = Math.floor(current);
          requestAnimationFrame(updateCounter);
        } else {
          stat.textContent = target;
        }
      };

      updateCounter();
    });
  }

  // Check if element is in viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Start animation when stats section is in viewport
  function checkStatsVisibility() {
    const statsSection = document.querySelector(".sass-stats");
    if (isInViewport(statsSection)) {
      animateStats();
      window.removeEventListener("scroll", checkStatsVisibility);
    }
  }

  window.addEventListener("scroll", checkStatsVisibility);
  checkStatsVisibility(); // Check on initial load

  // Navigation Active Link
  function setActiveLink() {
    const sections = document.querySelectorAll("section");
    let currentSection = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;

      if (window.scrollY >= sectionTop - 200) {
        currentSection = section.getAttribute("id");
      }
    });

    document.querySelectorAll(".sass-nav-link").forEach((link) => {
      link.classList.remove("sass-active");
      if (
        link.getAttribute("href") === "#" + currentSection ||
        (currentSection === "" && link.getAttribute("href") === "#")
      ) {
        link.classList.add("sass-active");
      }
    });
  }

  window.addEventListener("scroll", setActiveLink);

  // Smooth Scrolling for Navigation Links
  document
    .querySelectorAll(".sass-nav-link, .sass-mobile-nav-link")
    .forEach((link) => {
      link.addEventListener("click", function (e) {
        const href = this.getAttribute("href");

        if (href.startsWith("#") && href !== "#") {
          e.preventDefault();

          const targetElement = document.querySelector(href);
          if (targetElement) {
            const headerOffset = 80;
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition =
              elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
              top: offsetPosition,
              behavior: "smooth"
            });
          }

          // Close mobile menu if open
          if (mobileMenu.classList.contains("sass-active")) {
            toggleMobileMenu();
          }
        }
      });
    });

  // Parallax Effect for Hero Section
  window.addEventListener("scroll", function () {
    const hero = document.querySelector(".sass-hero");
    const scrollPosition = window.pageYOffset;

    // Apply parallax effect to hero background
    hero.style.backgroundPosition = `center ${scrollPosition * 0.5}px`;
  });

  // Reveal Animation for Sections
  function revealSections() {
    const sections = document.querySelectorAll("section:not(.sass-hero)");

    sections.forEach((section) => {
      const sectionTop = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (sectionTop < windowHeight - 150) {
        section.style.opacity = "1";
        section.style.transform = "translateY(0)";
      }
    });
  }

  // Apply initial styles for reveal animation
  document.querySelectorAll("section:not(.sass-hero)").forEach((section) => {
    section.style.opacity = "0";
    section.style.transform = "translateY(50px)";
    section.style.transition = "opacity 0.8s ease, transform 0.8s ease";
  });

  window.addEventListener("scroll", revealSections);
  revealSections(); // Check on initial load
});
