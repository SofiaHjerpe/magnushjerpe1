!function(e){function t(t){for(var n,o,c=t[0],i=t[1],u=0,a=[];u<c.length;u++)o=c[u],Object.prototype.hasOwnProperty.call(r,o)&&r[o]&&a.push(r[o][0]),r[o]=0;for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(e[n]=i[n]);for(l&&l(t);a.length;)a.shift()()}var n={},r={0:0};function o(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.e=function(e){var t=[],n=r[e];if(0!==n)if(n)t.push(n[2]);else{var c=new Promise((function(t,o){n=r[e]=[t,o]}));t.push(n[2]=c);var i,u=document.createElement("script");u.charset="utf-8",u.timeout=120,o.nc&&u.setAttribute("nonce",o.nc),u.src=function(e){return o.p+""+e+"."+{1:"f588f19f53311c8b6a0a",2:"b8cdca0a643ec9bd1ed2"}[e]+".js"}(e);var l=new Error;i=function(t){u.onerror=u.onload=null,clearTimeout(a);var n=r[e];if(0!==n){if(n){var o=t&&("load"===t.type?"missing":t.type),c=t&&t.target&&t.target.src;l.message="Loading chunk "+e+" failed.\n("+o+": "+c+")",l.name="ChunkLoadError",l.type=o,l.request=c,n[1](l)}r[e]=void 0}};var a=setTimeout((function(){i({type:"timeout",target:u})}),12e4);u.onerror=u.onload=i,document.head.appendChild(u)}return Promise.all(t)},o.m=e,o.c=n,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o.oe=function(e){throw console.error(e),e};var c=window.blocksyNewsletterSubscribeExtJsonp=window.blocksyNewsletterSubscribeExtJsonp||[],i=c.push.bind(c);c.push=t,c=c.slice();for(var u=0;u<c.length;u++)t(c[u]);var l=i;o(o.s=5)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.React},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.ctEvents},function(e,t,n){n.p=blocksy_ext_newsletter_subscribe_localization.public_url},function(e,t,n){"use strict";n.r(t);n(4);var r=n(0),o=n(2),c=n(1),i=Object(c.lazy)((function(){return Promise.all([n.e(1),n.e(2)]).then(n.bind(null,13))})),u=function(e){return Object(r.createElement)("div",null,Object(r.createElement)(c.Suspense,{fallback:Object(r.createElement)("div",{className:"ct-select-input"},Object(r.createElement)("input",{disabled:!0,placeholder:Object(o.__)("Loading...","blocksy-companion")}))},Object(r.createElement)(i,e)))},l=n(3),a=n.n(l);document.addEventListener("DOMContentLoaded",(function(){return a.a.on("blocksy:options:register",(function(e){e["blocksy-newsletter-subscribe"]=u}))}))}]);