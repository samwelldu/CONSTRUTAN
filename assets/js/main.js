document.addEventListener('DOMContentLoaded', () => {

    // Loader
    const loader = document.getElementById('loader-wrapper');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 1500); // Wait 1.5s for effect
    }

    // Mobile Menu Toggle logic is now handled by toggleMobileMenu() function
    // const mobileBtn = document.getElementById('mobile-menu-btn');
    // const mobileMenu = document.getElementById('mobile-menu');

    // if (mobileBtn && mobileMenu) {
    //     mobileBtn.addEventListener('click', () => {
    //         mobileMenu.classList.toggle('hidden');
    //     });
    // }

    // Navbar Scroll Effect
    const navbar = document.getElementById('main-nav');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-lg', 'py-3');
                navbar.classList.remove('py-5');
            } else {
                navbar.classList.remove('shadow-lg', 'py-3');
                navbar.classList.add('py-5');
            }
        });
    }

    // Check for "Thank You" message
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('msg') === 'sent') {
        const toast = document.createElement('div');
        toast.className = 'fixed bottom-5 right-5 bg-green-600 text-white px-6 py-4 rounded-lg shadow-xl z-50 animate-bounce';
        toast.innerHTML = '<i class="fas fa-check-circle mr-2"></i> ¡Gracias por su contacto! Hemos recibido su mensaje.';
        document.body.appendChild(toast);

        // Remove query param to avoid showing on refresh
        window.history.replaceState({}, document.title, window.location.pathname);

        setTimeout(() => {
            toast.remove();
        }, 5000);
    }

    // Stats Counter Animation
    const statsSection = document.getElementById('stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = document.querySelectorAll('.stat-number');
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        const speed = 100; // lower is faster
                        const increment = target / speed;

                        const updateCount = () => {
                            const currentText = counter.innerText.replace('+', '').replace('k', '');
                            const count = +currentText;

                            if (count < target) {
                                counter.innerText = Math.ceil(count + increment);
                                setTimeout(updateCount, 20);
                            } else {
                                counter.innerText = target + (counter.getAttribute('data-suffix') || '');
                            }
                        };
                        updateCount();
                    });
                    observer.unobserve(statsSection);
                }
            });
        }, { threshold: 0.5 });
        observer.observe(statsSection);
    }
});

// Mobile Info
const mobileMenu = document.getElementById('mobile-menu'); // Already defined above, but we will redefine logic below.

/* Sidebar Logic (Contact) */
function toggleSidebar() {
    const sidebar = document.getElementById('contact-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const mobileMenu = document.getElementById('mobile-menu');

    // Close mobile menu if open
    if (mobileMenu && !mobileMenu.classList.contains('-translate-x-full')) {
        mobileMenu.classList.add('-translate-x-full');
    }

    if (sidebar.classList.contains('translate-x-full')) {
        // Open Contact Sidebar
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        setTimeout(() => overlay.classList.remove('opacity-0'), 10);
        document.body.style.overflow = 'hidden';
    } else {
        // Close Contact Sidebar
        sidebar.classList.add('translate-x-full');
        // Only hide overlay if mobile menu is also closed (which it should be due to logic above, but safe check)
        overlay.classList.add('opacity-0');
        setTimeout(() => overlay.classList.add('hidden'), 300);
        document.body.style.overflow = 'auto';
    }
}

/* Mobile Menu Logic */
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('sidebar-overlay');
    const contactSidebar = document.getElementById('contact-sidebar');

    // Close contact sidebar if open
    if (contactSidebar && !contactSidebar.classList.contains('translate-x-full')) {
        contactSidebar.classList.add('translate-x-full');
    }

    if (mobileMenu.classList.contains('-translate-x-full')) {
        // Open Mobile Menu
        mobileMenu.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        setTimeout(() => overlay.classList.remove('opacity-0'), 10);
        document.body.style.overflow = 'hidden';
    } else {
        // Close Mobile Menu
        mobileMenu.classList.add('-translate-x-full');
        overlay.classList.add('opacity-0');
        setTimeout(() => overlay.classList.add('hidden'), 300);
        document.body.style.overflow = 'auto';
    }
}

/* Close All Sidebars (Overlay Click) */
function closeAllSidebars() {
    const mobileMenu = document.getElementById('mobile-menu');
    const contactSidebar = document.getElementById('contact-sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    // Close Mobile Menu
    if (mobileMenu && !mobileMenu.classList.contains('-translate-x-full')) {
        mobileMenu.classList.add('-translate-x-full');
    }

    // Close Contact Sidebar
    if (contactSidebar && !contactSidebar.classList.contains('translate-x-full')) {
        contactSidebar.classList.add('translate-x-full');
    }

    // Hide Overlay
    overlay.classList.add('opacity-0');
    setTimeout(() => {
        overlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

/* Project Modal Logic */
function openProjectModal(title, imageSrc, description, tags) {
    const modal = document.getElementById('project-modal');
    const modalTitle = document.getElementById('modal-title');
    const modalImage = document.getElementById('modal-image');
    const modalDesc = document.getElementById('modal-description');
    const modalTags = document.getElementById('modal-tags');

    modalTitle.innerText = title;
    modalImage.src = imageSrc;
    modalDesc.innerText = description;

    // Process tags
    let tagsHtml = '';
    // If tags is string (from data attribute parsing), split it
    const tagArray = Array.isArray(tags) ? tags : String(tags).split(',');

    tagArray.forEach(tag => {
        if (tag.trim()) {
            tagsHtml += `<span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-xs font-bold mr-2 mb-2 uppercase tracking-wide">${tag.trim()}</span>`;
        }
    });
    modalTags.innerHTML = tagsHtml;

    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.querySelector('div.transform').classList.remove('scale-95', 'opacity-0');
        modal.querySelector('div.transform').classList.add('scale-100', 'opacity-100');
    }, 10);
    document.body.style.overflow = 'hidden';
}

function closeProjectModal() {
    const modal = document.getElementById('project-modal');
    modal.querySelector('div.transform').classList.remove('scale-100', 'opacity-100');
    modal.querySelector('div.transform').classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}
