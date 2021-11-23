var CACHE_NAME = "my-site-cache-v1";
const DATA_CACHE_NAME = "data-cache-v1";

var urlsToCache = [
  "/",
  "/index.php",
  "/contacts.php",
  "/testimonials.php",
  "/assets/js/main.js",
  "/assets/js/social.js",
  "/assets/js/products.js",
  "/assets/img/product1.jpg",
  "/assets/img/product2.jpg",
  "/assets/img/product3.jpg",
  "/assets/img/product4.jpg",
  "/assets/img/product5.jpg",
  "/assets/img/product6.jpg",
  "/assets/img/product7.jpg",
  "/assets/img/product8.jpg",
  "/assets/img/hero.jpg",
  "/assets/img/home-ss.png",
  "/assets/img/logo.png",
  "/assets/img/logo1.png",
];

self.addEventListener("install", function (event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      console.log("Opened cache");
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener("fetch", function (event) {
  event.respondWith(
    fetch(event.request).catch(function () {
      return caches.match(event.request).then(function (response) {
        if (response) {
          return response;
        } else if (event.request.headers.get("accept").includes("text/html")) {
          // return the cached home page for all requests for html pages
          return caches.match("/");
        }
      });
    })
  );
});
