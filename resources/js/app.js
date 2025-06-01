import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  // Profile dropdown toggle
  console.log("Script loaded"); 
  const profileToggle = document.getElementById('profile-toggle');
  const profileDropdown = document.getElementById('profile-dropdown');

  if (profileToggle && profileDropdown) {
    profileToggle.addEventListener('click', () => {
      profileDropdown.classList.toggle('hidden');
    });

    window.addEventListener('click', function (e) {
      if (!profileToggle.contains(e.target) && !profileDropdown.contains(e.target)) {
        profileDropdown.classList.add('hidden');
      }
    });
  }

  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');

  if (mobileMenuButton && mobileMenu && menuIcon && closeIcon) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  }
});

