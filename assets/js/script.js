document.addEventListener('DOMContentLoaded', () => {
    const formContentContainer = document.getElementById('form-content');
    const formsContainer = document.getElementById('forms-container');
    const mapScreen = document.getElementById('map-screen');
    const profileScreen = document.getElementById('profile-screen');
    const carouselContainer = document.getElementById('carousel-container');

    // Existing carousel logic (only runs if carousel is visible on desktop)
    const images = [
        'img1.webp',
        'img2.png',
        'img3.jpg'
    ];
    let currentImageIndex = 0;

    const updateCarouselImage = () => {
        const imageUrl = images[currentImageIndex];
        
        // Only run image sizing logic if the element is actually visible
        if (window.getComputedStyle(carouselContainer).display !== 'none') {
            const tempImg = new Image();
            tempImg.onload = function() {
                const containerWidth = carouselContainer.offsetWidth;
                const naturalWidth = this.naturalWidth;
                const naturalHeight = this.naturalHeight;
                
                const newHeight = (containerWidth / naturalWidth) * naturalHeight;
                
                carouselContainer.style.height = `${newHeight}px`;

                carouselContainer.style.backgroundImage = `url('${imageUrl}')`;
                carouselContainer.style.backgroundSize = 'cover';
                carouselContainer.style.backgroundPosition = 'center';
                carouselContainer.style.backgroundRepeat = 'no-repeat';
                
                currentImageIndex = (currentImageIndex + 1) % images.length;
            };
            
            tempImg.src = imageUrl;
        }
    };

    updateCarouselImage();
    setInterval(updateCarouselImage, 5000);
    window.addEventListener('resize', updateCarouselImage);

    // --- Screen Rendering Logic ---

    const renderWelcomeScreen = () => {
        formContentContainer.innerHTML = `
            <h1 class="safe-streets-title font-black text-yellow-500">SAFE STREETS</h1>
            <button id="signup-btn" class="btn">Sign up</button>
            <button id="login-btn" class="btn mt-4">Log in</button>
        `;
        document.getElementById('signup-btn').addEventListener('click', () => renderLoginForm('Sign Up'));
        document.getElementById('login-btn').addEventListener('click', () => renderLoginForm('Log In'));
        
        formsContainer.style.display = 'flex';
        mapScreen.classList.remove('active');
        profileScreen.classList.remove('active');
        document.body.classList.remove('overflow-hidden');
    };

    const renderLoginForm = (action) => {
        formContentContainer.innerHTML = `
            <h1 class="safe-streets-title font-black text-yellow-500">${action}</h1>
            ${action === 'Sign Up' ? '<input type="email" id="email-input" class="input-field" placeholder="email address">' : ''}
            <input type="text" id="username-input" class="input-field" placeholder="enter username">
            <input type="password" id="password-input" class="input-field" placeholder="password">
            ${action === 'Sign Up' ? '<input type="password" id="confirm-password-input" class="input-field" placeholder="confirm password">' : ''}
            <button id="go-btn" class="btn">${action === 'Sign Up' ? 'Register' : 'Go'}</button>
            <button id="back-to-welcome-btn" class="btn bg-transparent border-none shadow-none text-white mt-4 p-0 px-0">Back</button>
        `;
        document.getElementById('go-btn').addEventListener('click', () => renderWalkScreen());
        document.getElementById('back-to-welcome-btn').addEventListener('click', () => renderWelcomeScreen());
    };

    const renderWalkScreen = () => {
        formContentContainer.innerHTML = `
            <h1 class="safe-streets-title font-black text-yellow-500">SAFE STREETS</h1>
            <p class="text-white mb-4">You are logged in! Ready to walk safely?</p>
            <button id="walk-btn" class="btn">WALK NOW</button>
        `;
        document.getElementById('walk-btn').addEventListener('click', () => {
            document.body.classList.add('overflow-hidden');
            formsContainer.style.display = 'none';
            mapScreen.classList.add('active');
            profileScreen.classList.remove('active');
        });
    };

    const renderProfileScreen = () => {
        const profileContent = document.getElementById('profile-content');
        // Added a small, centered block for profile content on mobile for a nicer look
        profileContent.innerHTML = `
            <h2 class="text-2xl font-bold mb-4 text-white">My Profile</h2>
            <img src="assets/profile.png" alt="Profile Picture" class="rounded-full mb-4 border-4 border-yellow-500 w-[100px] h-[100px] object-cover">
            <p class="text-xl font-bold mb-2 text-white">samplekeneme</p>
            <p class="text-gray-300 mb-6">sample.email@example.com</p>
            <div class="text-left w-full max-w-xs space-y-2 mb-6 text-sm bg-gray-700 p-4 rounded-lg">
                <p class="text-white"><strong>Total Walks:</strong> 45</p>
                <p class="text-white"><strong>Distance Saved:</strong> 350 km</p>
                <p class="text-white"><strong>Last Logged Walk:</strong> Yesterday</p>
                <p class="text-white"><strong>WARNING: this detail is just for test hehehehehe</p>
            </div>
            <button id="back-to-map-btn" class="btn max-w-none">Back to Map</button>
        `;
        
        profileScreen.classList.add('active');
        mapScreen.classList.remove('active');
        formsContainer.style.display = 'none';
        
        document.getElementById('back-to-map-btn').addEventListener('click', () => {
            profileScreen.classList.remove('active');
            mapScreen.classList.add('active');
        });
    };

    document.addEventListener('click', (event) => {
        if (event.target.id === 'profile-btn') {
            renderProfileScreen();
        } else if (event.target.id === 'logout-btn') {
            renderWelcomeScreen();
        }
    });

    // Initialize the application
    renderWelcomeScreen();
});