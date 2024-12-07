const CACHE_NAME = "missioncs-cache-v1";
const urlsToCache = [
  "/",
  "/app/Views/student/index.php", // Update this if the URL differs when accessed
  "/public/assets/index.css",
  "/public/assets/index.js",
  "https://missioncstestseries.com//assetItems/image/logo.jpg",
  "https://missioncstestseries.com//assetItems/image/logo.jpg"
];

// Install event
self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(urlsToCache);
    })
  );
});

// Fetch event
self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});

// Activate event
self.addEventListener("activate", (event) => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
