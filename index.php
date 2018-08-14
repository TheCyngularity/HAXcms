<?php
  include_once 'system/lib/bootstrapHAX.php';
  include_once $HAXCMS->configDirectory . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HAXCMS site list</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,user-scalable=yes">
  <meta name="generator" content="HAXCMS">
  <meta name="description" content="My HAXCMS site listing">
  <link rel="icon" href="assets/favicon.ico">
  <link rel="manifest" href="manifest.json">
  <meta name="theme-color" content="#3f51b5">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="My site">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="My App">
  <link rel="apple-touch-icon" href="assets/icon-48x48.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon-72x72.png">
  <link rel="apple-touch-icon" sizes="96x96" href="assets/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon-144x144.png">
  <link rel="apple-touch-icon" sizes="192x192" href="assets/icon-192x192.png">
  <meta name="msapplication-TileImage" content="assets/icon-144x144.png">
  <meta name="msapplication-TileColor" content="#3f51b5">
  <meta name="msapplication-tap-highlight" content="no">
  <script>/* Don't edit this block */
    !function (e) { var r = e.babelHelpers = {}; r.typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) { return typeof e } : function (e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e }, r.classCallCheck = function (e, r) { if (!(e instanceof r)) throw new TypeError("Cannot call a class as a function") }, r.createClass = function () { function e(e, r) { for (var t = 0; t < r.length; t++) { var n = r[t]; n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n) } } return function (r, t, n) { return t && e(r.prototype, t), n && e(r, n), r } }(), r.defineEnumerableProperties = function (e, r) { for (var t in r) { var n = r[t]; n.configurable = n.enumerable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, t, n) } return e }, r.defaults = function (e, r) { for (var t = Object.getOwnPropertyNames(r), n = 0; n < t.length; n++) { var o = t[n], i = Object.getOwnPropertyDescriptor(r, o); i && i.configurable && void 0 === e[o] && Object.defineProperty(e, o, i) } return e }, r.defineProperty = function (e, r, t) { return r in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e }, r.extends = Object.assign || function (e) { for (var r = 1; r < arguments.length; r++) { var t = arguments[r]; for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]) } return e }, r.get = function e(r, t, n) { null === r && (r = Function.prototype); var o = Object.getOwnPropertyDescriptor(r, t); if (void 0 === o) { var i = Object.getPrototypeOf(r); return null === i ? void 0 : e(i, t, n) } if ("value" in o) return o.value; var a = o.get; if (void 0 !== a) return a.call(n) }, r.inherits = function (e, r) { if ("function" != typeof r && null !== r) throw new TypeError("Super expression must either be null or a function, not " + typeof r); e.prototype = Object.create(r && r.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), r && (Object.setPrototypeOf ? Object.setPrototypeOf(e, r) : e.__proto__ = r) }, r.instanceof = function (e, r) { return null != r && "undefined" != typeof Symbol && r[Symbol.hasInstance] ? r[Symbol.hasInstance](e) : e instanceof r }, r.newArrowCheck = function (e, r) { if (e !== r) throw new TypeError("Cannot instantiate an arrow function") }, r.objectDestructuringEmpty = function (e) { if (null == e) throw new TypeError("Cannot destructure undefined") }, r.objectWithoutProperties = function (e, r) { var t = {}; for (var n in e) r.indexOf(n) >= 0 || Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]); return t }, r.possibleConstructorReturn = function (e, r) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !r || "object" != typeof r && "function" != typeof r ? e : r }, r.set = function e(r, t, n, o) { var i = Object.getOwnPropertyDescriptor(r, t); if (void 0 === i) { var a = Object.getPrototypeOf(r); null !== a && e(a, t, n, o) } else if ("value" in i && i.writable) i.value = n; else { var u = i.set; void 0 !== u && u.call(o, n) } return n }, r.slicedToArray = function () { function e(e, r) { var t = [], n = !0, o = !1, i = void 0; try { for (var a, u = e[Symbol.iterator](); !(n = (a = u.next()).done) && (t.push(a.value), !r || t.length !== r); n = !0); } catch (e) { o = !0, i = e } finally { try { !n && u.return && u.return() } finally { if (o) throw i } } return t } return function (r, t) { if (Array.isArray(r)) return r; if (Symbol.iterator in Object(r)) return e(r, t); throw new TypeError("Invalid attempt to destructure non-iterable instance") } }(), r.taggedTemplateLiteral = function (e, r) { return Object.freeze(Object.defineProperties(e, { raw: { value: Object.freeze(r) } })) }, r.temporalRef = function (e, r, t) { if (e === t) throw new ReferenceError(r + " is not defined - temporal dead zone"); return e }, r.temporalUndefined = {}, r.toArray = function (e) { return Array.isArray(e) ? e : Array.from(e) }, r.toConsumableArray = function (e) { if (Array.isArray(e)) { for (var r = 0, t = Array(e.length); r < e.length; r++)t[r] = e[r]; return t } return Array.from(e) } }("undefined" == typeof global ? self : global);
    /* this script must run before Polymer is imported */
    window.Polymer = {
      dom: 'shady',
      lazyRegister: true
    };
  </script>
    <link rel="stylesheet" href="webcomponents/bower_components/haxcms-elements/base.css">
    <link rel="import" href="webcomponents/bower_components/polymer/polymer.html">
    <link rel="import" href="webcomponents/bower_components/haxcms-elements/haxcms-site-listing.html">
  </head>
  <body>
    <haxcms-site-listing create-params='{"token":"<?php print $HAXCMS->getRequestToken();?>"}' base-path="<?php print $HAXCMS->basePath;?>" data-source="<?php print $HAXCMS->sitesJSON;?>"></haxcms-site-listing>
    <script>
    (function () {
      if ('registerElement' in document
        && 'import' in document.createElement('link')
        && 'content' in document.createElement('template')) {
        // platform is good!
      } else {
        // polyfill the platform!
        var e = document.createElement('script');
        e.src = 'webcomponents/bower_components/webcomponentsjs/webcomponents.min.js';
        document.body.appendChild(e);
        // c1 -> c0 ponyfill avoiding conflicts in FF w/ timing
        setTimeout(() => {
          var e2 = document.createElement('script');
          e2.src = 'webcomponents/bower_components/document-register-element/build/document-register-element.js';
          document.body.appendChild(e2);
        }, 50);
      }
    })();
    </script>
    <noscript>Please enable JavaScript to view this website.</noscript>
  </body>
</html>