const CACHE_NAME = "missioncs-cache-v1";
const urlsToCache = [
  "/dashboard",
  "https://missioncstestseries.com/dashboard",
  "<?=base_url()?>/assets/css/style.css?v=1.0.1",
  "https://missioncstestseries.com//assetItems/image/logo.jpg",
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
self.addEventListener('fetch', (event) => {
  if (event.request.mode === 'navigate') {
    event.respondWith(
      caches.match('/dashboard').then((response) => {
        return response || fetch(event.request);
      })
    );
  }
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
