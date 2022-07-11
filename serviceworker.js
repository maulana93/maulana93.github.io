var CACHE_NAME = 'my-site-cache-v1';

self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open(CACHE_NAME).then(function(cache) {
        console.log('in install serviceworker...')
        return cache.addAll([
          '/',  
          '/assets/images/logo-192.png',  
          '/assets/images/logo-512.png',  
          '/assets/images/favicon.ico',  
          '/assets/main.js'
        ]);
      })
    );
  });
  

self.addEventListener('activate', function(event) {
  // Delete all caches that aren't named in CURRENT_CACHES.
  // While there is only one cache in this example, the same logic will handle the case where
  // there are multiple versioned caches.
  var cacheWhiteList = ['pages-cache-v1', 'blog-posts-cache-v1'];
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhiteList.indexOf(cacheName) === -1) {
            // If this cache name isn't present in the set of "expected" cache names, then delete it.
            console.log('Deleting out of date cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    cache.match(event.request).then(function(response) {
        if (response) {
          // If there is an entry in the cache for event.request, then response will be defined
          // and we can just return it. Note that in this example, only font resources are cached.
          console.log(' Found response in cache:', response);

          return response;
        }
        return fetch(event.request);
    })
  );
});
