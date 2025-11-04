<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Streets - Mobile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 flex flex-col md:flex-row items-center justify-center">

    <div id="carousel-container" class="carousel-container">
    </div>

    <div id="forms-container" class="forms-container"> 
        <div id="form-content" class="flex flex-col items-center justify-center p-8 w-full"> 
            </div>
    </div>
    
    <div id="map-screen" class="screen map-screen fixed inset-0 z-50">
        <div class="map-container">
            <div class="map-controls-top">
                <button id="profile-btn" class="btn-small">Profile</button>
                <button id="logout-btn" class="btn-small">Log out</button>
            </div>
            
            <svg class="w-8 h-8 marker-pin" style="left: 20%; top: 30%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path fill="#ef4444" d="M172.268 501.67C272.956 291.684 384 191.229 384 140.751 384 66.924 316.486 0 232.064 0 147.641 0 80 66.924 80 140.751c0 50.478 111.044 150.933 211.732 360.919l-9.333-9.333-9.333-9.333c-4.437-4.437-11.458-5.32-16.746-2.317-5.288 3.003-7.59 8.918-6.195 14.61l4.004 15.918c1.395 5.692-2.31 11.457-7.46 13.918-5.15 2.46-11.238 1.15-15.118-3.08l-5.197-5.592c-3.88-4.23-9.764-5.54-14.868-3.522l-15.823 6.195c-5.104 2.018-8.818 7.323-8.818 12.835 0 5.512 3.714 10.817 8.818 12.835l15.823 6.195c5.104 2.018 11.002 0.708 14.882-3.522l5.197-5.592c-3.88-4.23-9.764-5.54-14.868-3.522l-15.823 6.195c-5.104 2.018-8.818 7.323-8.818 12.835 0 5.512 3.714 10.817 8.818 12.835zM224 288c-44.183 0-80-35.817-80-80s35.817-80 80-80 80 35.817 80 80-35.817 80-80 80z"/>
            </svg>

            <div class="search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search for safe routes...">
            </div>
            
        </div>
    </div>

    <div id="profile-screen" class="screen fixed inset-0 z-50">
        <div class="forms-container"> 
            <div id="profile-content" class="flex flex-col items-center justify-center p-8 w-full bg-gray-800 bg-opacity-90 rounded-xl shadow-lg"> 
                </div>
        </div>
    </div>
    
    <script src="script.js"></script>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Streets - Mobile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 flex flex-col md:flex-row items-center justify-center">

    <div id="carousel-container" class="carousel-container">
    </div>

    <div id="forms-container" class="forms-container"> 
        <div id="form-content" class="flex flex-col items-center justify-center p-8 w-full"> 
            </div>
    </div>
    
    <div id="map-screen" class="screen map-screen fixed inset-0 z-50">
        <div class="map-container">
            <div class="map-controls-top">
                <button id="profile-btn" class="btn-small">Profile</button>
                <button id="logout-btn" class="btn-small">Log out</button>
            </div>
            
            <svg class="w-8 h-8 marker-pin" style="left: 20%; top: 30%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path fill="#ef4444" d="M172.268 501.67C272.956 291.684 384 191.229 384 140.751 384 66.924 316.486 0 232.064 0 147.641 0 80 66.924 80 140.751c0 50.478 111.044 150.933 211.732 360.919l-9.333-9.333-9.333-9.333c-4.437-4.437-11.458-5.32-16.746-2.317-5.288 3.003-7.59 8.918-6.195 14.61l4.004 15.918c1.395 5.692-2.31 11.457-7.46 13.918-5.15 2.46-11.238 1.15-15.118-3.08l-5.197-5.592c-3.88-4.23-9.764-5.54-14.868-3.522l-15.823 6.195c-5.104 2.018-8.818 7.323-8.818 12.835 0 5.512 3.714 10.817 8.818 12.835l15.823 6.195c5.104 2.018 11.002 0.708 14.882-3.522l5.197-5.592c-3.88-4.23-9.764-5.54-14.868-3.522l-15.823 6.195c-5.104 2.018-8.818 7.323-8.818 12.835 0 5.512 3.714 10.817 8.818 12.835zM224 288c-44.183 0-80-35.817-80-80s35.817-80 80-80 80 35.817 80 80-35.817 80-80 80z"/>
            </svg>

            <div class="search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search for safe routes...">
            </div>
            
        </div>
    </div>

    <div id="profile-screen" class="screen fixed inset-0 z-50">
        <div class="forms-container"> 
            <div id="profile-content" class="flex flex-col items-center justify-center p-8 w-full bg-gray-800 bg-opacity-90 rounded-xl shadow-lg"> 
                </div>
        </div>
    </div>
    
    <script src="script.js"></script>

</body>
</html>