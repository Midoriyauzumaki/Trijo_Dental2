<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trijo Dental Clinic</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Link to external CSS -->
    <style>
        .hero {
            position: relative;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .slider-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.5)
            );
            z-index: 1;
        }

        .slider img {
            width: 100%;
            height: 80vh;
            object-fit: cover;
            filter: brightness(0.9);
        }

        .slider-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            display: flex;
            gap: 10px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem;
            color: #ffffff;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeIn 1s ease-in;
        }

        .hero-content h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            line-height: 1.6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: slideUp 0.5s ease-out forwards;
        }

        .hero-content p:nth-child(2) { animation-delay: 0.2s; }
        .hero-content p:nth-child(3) { animation-delay: 0.4s; }
        .hero-content p:nth-child(4) { animation-delay: 0.6s; }
        .hero-content p:nth-child(5) { animation-delay: 0.8s; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        /* Enhanced Promo Gallery Styles */
        .promo-gallery {
            padding: 60px 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .promo-gallery h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            padding-bottom: 15px;
        }

        .promo-gallery h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #4CAF50, #45a049);
        }

        .promo-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .promo-item {
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            background: white;
            cursor: pointer;
            position: relative;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .promo-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .promo-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .promo-item:hover img {
            transform: scale(1.1);
        }

        .promo-caption {
            padding: 20px;
            background: white;
            color: #333;
            font-weight: bold;
            border-top: 1px solid #eee;
            position: relative;
            z-index: 1;
        }

        .promo-caption div {
            font-size: 1.2em;
            color: #2c3e50;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .promo-item:hover .promo-caption div {
            color: #4CAF50;
        }

        /* Add overlay effect */
        .promo-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(76, 175, 80, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .promo-item:hover::before {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .promo-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .promo-gallery h2 {
                font-size: 2em;
            }
        }

        /* Enhanced Map Section Styles */
        .map-section {
            padding: 60px 20px;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
            text-align: center;
        }

        .map-section h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            font-weight: bold;
        }

        .map-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .map-container iframe:hover {
            transform: scale(1.01);
        }

        .location-info {
            margin-top: 30px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 10px;
            text-align: center;
        }

        .location-info h3 {
            color: #2c3e50;
            font-size: 1.8em;
            margin-bottom: 15px;
        }

        .location-info p {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .location-info .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .location-info .btn:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            width: 80%;
            max-width: 700px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .close-modal {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #333;
        }

        .modal-image {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .modal-details {
            padding: 20px;
        }

        .modal-details h3 {
            color: #333;
            margin-bottom: 15px;
        }

        .modal-details p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo-container">
                <img src="../img/127.png" alt="Trijo Dental Clinic Logo" class="logo">
                <h1>Trijo Dental Clinic</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="homepages.php">Home</a></li>
                    <li><a href="#" onclick="openServicesModal(); return false;">Services</a></li>
                    <li><a href="../user/userlog.php">Login</a></li>
                                    </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section with Slider -->
    <section id="home" class="hero">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="../img/2.webp" alt="Trijo Dental Clinic">
                </div>
                <div class="slide">
                    <img src="../img/12.jpg" alt="Trijo Dental Clinic">
                </div>
                <div class="slide">
                    <img src="../img/13.jpg" alt="Dental Care">
                </div>
                <div class="slide">
                    <img src="../img/14.jpeg" alt="Dental Services">
                </div>
                <div class="slide">
                    <img src="../img/16.png" alt="Dental Treatment">
                </div>
            </div>
            <div class="slider-dots"></div>
        </div>

        <div class="hero-content">
            <h2>Your new smile starts with us!</h2>
            <p>Modern, Holistic Dental Approach</p>
            <p>Led by Internationally Trained Dentists</p>
            <p>Premium Quality Dental Care</p>
            <p>Affordable, Light Payment Terms</p>
        </div>
    </section>


    <!-- Promotional Gallery Section -->
    <section class="promo-gallery" id="promo">
        <h2>Visit our Website And Store</h2>
        <div class="promo-container">
            <div class="promo-item" onclick="openModal(1)">
                <img src="../img/132.png" alt="Dental Promotion 1">
                <div class="promo-caption">
                    <div>Staff Id Card </div>
                </div>
            </div>
            <div class="promo-item" onclick="openModal(2)">
                <img src="../img/136.png" alt="Dental Promotion 2">
                <div class="promo-caption">
                    <div>Facebook Pages</div>
                </div>
            </div>
            <div class="promo-item" onclick="openModal(3)">
                <img src="../img/137.png" alt="Dental Promotion 3">
                <div class="promo-caption">
                    <div>Instagram Post</div>
                </div>
            </div>
            <div class="promo-item" onclick="openModal(4)">
                <img src="../img/129.png" alt="Dental Promotion 4">
                <div class="promo-caption">
                    <div>Dental Poster</div>
                </div>
            </div>
            <div class="promo-item" onclick="openModal(5)">
                <img src="../img/23.jpg" alt="Dental Promotion 5">
                <div class="promo-caption">
                    <div>Cosmetic Dentistry</div>
                </div>
            </div>
            <div class="promo-item" onclick="openModal(6)">
                <img src="../img/138.png" alt="Dental Promotion 6">
                <div class="promo-caption">
                    <div>Complete Dental Care</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <img id="modalImage" class="modal-image" src="" alt="Promotion Details">
            <div class="modal-details">
                <h3 id="modalTitle"></h3>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>

    <!-- Services Modal -->
    <div id="servicesModal" class="modal">
        <div class="modal-content" style="max-width: 900px;">
            <span class="close-modal" onclick="closeServicesModal()">&times;</span>
            <h2 style="text-align: center; color: #4CAF50; margin-bottom: 20px;">Our Dental Services</h2>
            <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div class="service-item" style="padding: 15px; background: #f9f9f9; border-radius: 10px;">
                    <img src="../img/images.jpg" alt="General Dentistry" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <h3>General Dentistry</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Dental Checkups</li>
                        <li>Teeth Cleaning</li>
                        <li>Cavity Fillings</li>
                        <li>Root Canal Therapy</li>
                    </ul>
                </div>
                <div class="service-item" style="padding: 15px; background: #f9f9f9; border-radius: 10px;">
                    <img src="../img/images.png" alt="Cosmetic Dentistry" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <h3>Cosmetic Dentistry</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Teeth Whitening</li>
                        <li>Dental Veneers</li>
                        <li>Dental Bonding</li>
                        <li>Smile Makeover</li>
                    </ul>
                </div>
                <div class="service-item" style="padding: 15px; background: #f9f9f9; border-radius: 10px;">
                    <img src="../img/12.jpg" alt="Orthodontics" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <h3>Orthodontics</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Traditional Braces</li>
                        <li>Clear Aligners</li>
                        <li>Retainers</li>
                        <li>Bite Correction</li>
                    </ul>
                </div>
                <div class="service-item" style="padding: 15px; background: #f9f9f9; border-radius: 10px;">
                    <img src="../img/123.jpg" alt="Oral Surgery" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                    <h3>Oral Surgery</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>Tooth Extraction</li>
                        <li>Wisdom Teeth Removal</li>
                        <li>Dental Implants</li>
                        <li>Gum Surgery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section" id="location">
        <h1>Find Us Here</h1>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6647054721184!2d121.05387227584551!3d14.545311781363438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9089766a049%3A0x5615254bf24bf7b1!2sTrijo%20Dental%20Clinic!5e0!3m2!1sen!2sph!4v1701311024503!5m2!1sen!2sph"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="location-info">
                <h3>Trijo Dental Clinic</h3>
                <p>Visit us at our location or contact us for appointments</p>
                <a href="https://www.google.com/maps/place/Trijo+Dental+Clinic/@14.5436097,121.0323545,14z/data=!4m6!3m5!1s0x3397c9089766a049:0x5615254bf24bf7b1!8m2!3d14.545312!4d121.0564514!16s%2Fg%2F11kqhyscq3?entry=ttu" 
                   target="_blank" 
                   class="btn">View on Google Maps</a>
            </div>
        </div>
    </section>

    <!-- Chatbot Section -->
    <div class="chat-bot">
        <div class="chat-header" onclick="toggleChat()">
            <img src="../img/126.png" alt="Dental Bot" class="bot-icon">
            <span>Dental Assistant Bot</span>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="messages" id="messages">
                <div class="message bot">
                    Hello! I'm your dental assistant bot. How can I help you today?
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="userInput" placeholder="Type your message...">
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>

    <style>
        .chat-bot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .chat-header {
            padding: 10px;
            background: #4CAF50;
            color: white;
            border-radius: 10px 10px 0 0;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .bot-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .chat-body {
            display: none;
            height: 300px;
            padding: 10px;
        }

        .messages {
            height: 250px;
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .message {
            padding: 8px;
            margin: 5px;
            border-radius: 5px;
            max-width: 80%;
        }

        .bot {
            background: #e9ecef;
            margin-right: auto;
        }

        .user {
            background: #4CAF50;
            color: white;
            margin-left: auto;
        }

        .chat-input {
            display: flex;
            gap: 5px;
        }

        .chat-input input {
            flex: 1;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .chat-input button {
            padding: 5px 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

    <script>
        function toggleChat() {
            const chatBody = document.getElementById('chatBody');
            chatBody.style.display = chatBody.style.display === 'none' ? 'block' : 'none';
        }

        function sendMessage() {
            const input = document.getElementById('userInput');
            const messages = document.getElementById('messages');
            
            if (input.value.trim() === '') return;

            // Add user message
            const userMsg = document.createElement('div');
            userMsg.className = 'message user';
            userMsg.textContent = input.value;
            messages.appendChild(userMsg);

            // Simulate bot response
            setTimeout(() => {
                const botMsg = document.createElement('div');
                botMsg.className = 'message bot';
                botMsg.textContent = getBotResponse(input.value);
                messages.appendChild(botMsg);
                messages.scrollTop = messages.scrollHeight;
            }, 500);

            input.value = '';
            messages.scrollTop = messages.scrollHeight;
        }

        function getBotResponse(input) {
            const responses = {
                'hello': 'Hi! How can I assist you with your dental needs?',
                'appointment': 'To book an appointment, please call us at (123) 456-7890 or use our online booking system.',
                'services': 'We offer various dental services including cleanings, fillings, crowns, and cosmetic dentistry.',
                'location': 'We are located at [Your Clinic Address]. You can find us on Google Maps!',
                'hours': 'Our clinic is open Monday-Friday 9AM-6PM, and Saturday 9AM-2PM.',
                'emergency': 'For dental emergencies, please call our 24/7 emergency line: (123) 456-7890'
            };

            input = input.toLowerCase();
            for (let key in responses) {
                if (input.includes(key)) {
                    return responses[key];
                }
            }
            return "I'm not sure about that. Please contact our clinic for more specific information.";
        }

        function openServicesModal() {
            const modal = document.getElementById('servicesModal');
            modal.style.display = "block";
        }

        function closeServicesModal() {
            const modal = document.getElementById('servicesModal');
            modal.style.display = "none";
        }

        // Update the window click handler
        window.onclick = function(event) {
            const imageModal = document.getElementById('imageModal');
            const servicesModal = document.getElementById('servicesModal');
            if (event.target == imageModal) {
                imageModal.style.display = "none";
            }
            if (event.target == servicesModal) {
                servicesModal.style.display = "none";
            }
        }
    </script>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2023 Trijo Dental Clinic. All rights reserved.</p>
    </footer>
    <script src="../js/slider.js"></script>
    <script>
        const modalContent = {
            1: {
                title: "Special Dental Package 1",
                description: "Comprehensive dental care package including cleaning, checkup, and basic treatments.",
                image: "../img/132.png"
            },
            2: {
                title: "Dental Care Package 2",
                description: "Advanced dental treatments with modern technology and expert care.",
                image: "../img/136.png"
            },
            3: {
                title: "Premium Service Package",
                description: "Experience premium dental care with our specialized treatments.",
                image: "../img/137.png"
            },
            4: {
                title: "Family Dental Package",
                description: "Special family package for complete dental care solutions.",
                image: "../img/129.png"
            },
            5: {
                title: "Cosmetic Dentistry",
                description: "Transform your smile with our cosmetic dentistry services.",
                image: "../img/23.jpg"
            },
            6: {
                title: "Complete Dental Care",
                description: "Full range of dental services for your perfect smile.",
                image: "../img/138.png"
            }
        };

        function openModal(id) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDesc = document.getElementById('modalDescription');
            
            modal.style.display = "block";
            modalImg.src = modalContent[id].image;
            modalTitle.textContent = modalContent[id].title;
            modalDesc.textContent = modalContent[id].description;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>