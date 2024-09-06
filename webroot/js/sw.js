//Asignar nombre y version de la cache
const CACHE_NAME = 'v1_cache_pod_heartlandfpg';
//Fichero de la aplicación offline cacheados
var urlsToCache = ['./','./css/style.css',
                   './css',
                   './img/favicon.png',
                   './img/favicon-1024.png',
'./img/favicon-512.png',
'./img/favicon-384.png',
'./img/favicon-256.png',
'./img/favicon-192.png',
'./img/favicon-128.png',
'./img/favicon-96.png',
'./img/favicon-64.png',
'./img/favicon-32.png',
'./img/favicon-16.png',
'./img'
];
                 
//Evento install
//Se encarga de la instalación de servide worker y guardar recursos estaticos
self.addEventListener('install',e =>{ 
	e.waitUntil(caches.open(CACHE_NAME)
	.then(cache => { return cache.addAll(urlsToCache)
	.then(()=>{self.skipWaiting();})
	.catch(err=> { console.log('No se ha registrado el cache',err);}) 


       }) 
	 
})

//Evento activate


//Evento fetch                 