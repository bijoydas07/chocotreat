{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Phone -->
        <div class="phone">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}






<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Choco Treat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="http://127.0.0.1:8000/ui/frontend/assets/images//favicon.png">
    <!-- bootstrap v4.0.0-beta.2 css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/bootstrap.min.css">
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/owl.carousel.min.css">
<!-- font-awesome v4.6.3 css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/font-awesome.min.css">
<!-- flaticon.css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/flaticon.css">
<!-- jquery-ui.css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/jquery-ui.css">
<!-- metisMenu.min.css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/metisMenu.min.css">
<!-- swiper.min.css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/swiper.min.css">
<!-- style css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/styles.css">
<!-- responsive css -->
<link rel="stylesheet" href="http://127.0.0.1:8000/ui/frontend/assets/css/responsive.css">
<!-- modernizr css -->

    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/owl.carousel.min.js"></script>
    <!-- scrollup.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/scrollup.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- jquery.zoom.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/jquery.zoom.min.js"></script>
    <!-- countdown.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/countdown.js"></script>
    <!-- swiper.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/swiper.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/metisMenu.min.js"></script>
    <!-- mailchimp.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/mailchimp.js"></script>
    <!-- jquery-ui.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/jquery-ui.min.js"></script>
    <!-- main js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/scripts.js"></script>
    
    
<link rel='stylesheet' type='text/css' property='stylesheet' href='//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1676989262&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'><script src='//127.0.0.1:8000/_debugbar/assets/javascript?v=1676989262' data-turbolinks-eval='false' data-turbo-eval='false'></script><script data-turbo-eval="false">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; doc.head.appendChild(refStyle); refStyle = doc.createElement('style'); doc.head.appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').slice(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.slice(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>

<body>
<!-- checkout-area start -->
<div class="account-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12" style="padding: 35px;
            box-shadow: 0px 0px 16px 0px #ff126a2e;">
                <div class="login-header" style="display: flex; justify-content: center; border: 1px solid #ff196e; margin-bottom: 38px;padding: 4px 0px;">
                    <h3>Registration</h3>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="account-form form-style">
                        <p>Name <span style="color:#ff196e">*</span></p>
                        <input type="text" name="name">
                        <p>Email Address<span style="color:#ff196e">*</span></p>
                        <input type="email" name="email">
                        <p>Phone<span style="color:#ff196e">*</span></p>
                        <input type="tel" name="phone">
                        <p>Password <span style="color:#ff196e">*</span></p>
                        <input type="Password" name="password">
                        <p>Confirm Password <span style="color:#ff196e">*</span></p>
                        <input type="Password" name="password_confirmation">
                        <button type="submit">Register</button>
                        <div class="text-center">
                            <a href="http://127.0.0.1:8000/login">Or Login</a>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>
</div>
<!-- checkout-area end -->    <section class="social-newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter text-center">
                    <h3>Subscribe Newsletter</h3>
                    <div class="newsletter-form">
                        <form>
                            <input type="text" class="form-control" placeholder="Enter Your Email Address...">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .footer-->
    <div class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-item">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="footer-top-text text-center">
                            <ul>
                                <li><a href="home.html">home</a></li>
                                <li><a href="#">our story</a></li>
                                <li><a href="#">feed shop</a></li>
                                <li><a href="blog.html">how to eat blog</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="footer-icon">
                        <ul class="d-flex">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <div class="footer-content">
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure righteous indignation and dislike</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-12">
                    <div class="footer-adress">
                        <ul>
                            <li><a href="#"><span>Email:</span> chocotreat@gmail.com</a></li>
                            <li><a href="#"><span>Tel:</span> 01766256006</a></li>
                            <li><a href="#"><span>Adress:</span> Gulshan 1, Road: 7/A, H-35</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="footer-reserved">
                        <ul>
                            <li>Copyright © Md Monirozzaman | 2023</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jquery latest version -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/owl.carousel.min.js"></script>
    <!-- scrollup.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/scrollup.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- jquery.zoom.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/jquery.zoom.min.js"></script>
    <!-- countdown.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/countdown.js"></script>
    <!-- swiper.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/swiper.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/metisMenu.min.js"></script>
    <!-- mailchimp.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/mailchimp.js"></script>
    <!-- jquery-ui.min.js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/jquery-ui.min.js"></script>
    <!-- main js -->
    <script src="http://127.0.0.1:8000/ui/frontend/assets/js/scripts.js"></script>
    

<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.LaravelViewTemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/127.0.0.1:8000\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"Xd224bc8a699c2e135629d45382938990","datetime":"2023-03-30 07:58:12","utime":1680163092.447562,"method":"GET","uri":"\/user-registration","ip":"127.0.0.1"},"php":{"version":"8.1.10","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1680163092.205896,"end":1680163092.447587,"duration":0.24169111251831055,"duration_str":"242ms","measures":[{"label":"Booting","start":1680163092.205896,"relative_start":0,"end":1680163092.371433,"relative_end":1680163092.371433,"duration":0.16553711891174316,"duration_str":"166ms","params":[],"collector":null},{"label":"Application","start":1680163092.373107,"relative_start":0.16721105575561523,"end":1680163092.447589,"relative_end":1.9073486328125e-6,"duration":0.07448196411132812,"duration_str":"74.48ms","params":[],"collector":null}]},"memory":{"peak_usage":19014256,"peak_usage_str":"18MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":10,"templates":[{"name":"frontend.registration (\\resources\\views\\frontend\\registration.blade.php)","param_count":0,"params":[],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/frontend\/registration.blade.php&line=0"},{"name":"components.frontend.layouts.partials.elements.registration (\\resources\\views\\components\\frontend\\layouts\\partials\\elements\\registration.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/elements\/registration.blade.php&line=0"},{"name":"components.frontend.layouts.partials.elements.newsletter (\\resources\\views\\components\\frontend\\layouts\\partials\\elements\\newsletter.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/elements\/newsletter.blade.php&line=0"},{"name":"components.frontend.layouts.master (\\resources\\views\\components\\frontend\\layouts\\master.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/master.blade.php&line=0"},{"name":"components.frontend.layouts.partials.css (\\resources\\views\\components\\frontend\\layouts\\partials\\css.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/css.blade.php&line=0"},{"name":"components.frontend.layouts.partials.js (\\resources\\views\\components\\frontend\\layouts\\partials\\js.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/js.blade.php&line=0"},{"name":"components.frontend.layouts.partials.search (\\resources\\views\\components\\frontend\\layouts\\partials\\search.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/search.blade.php&line=0"},{"name":"components.frontend.layouts.partials.header (\\resources\\views\\components\\frontend\\layouts\\partials\\header.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/header.blade.php&line=0"},{"name":"components.frontend.layouts.partials.footer (\\resources\\views\\components\\frontend\\layouts\\partials\\footer.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/footer.blade.php&line=0"},{"name":"components.frontend.layouts.partials.js (\\resources\\views\\components\\frontend\\layouts\\partials\\js.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\resources\\views\/components\/frontend\/layouts\/partials\/js.blade.php&line=0"}]},"route":{"uri":"GET user-registration","middleware":"web","controller":"App\\Http\\Controllers\\FrontendController@userRegistration","namespace":null,"prefix":"","where":[],"as":"frontend.registration","file":"<a href=\"phpstorm:\/\/open?file=C:\\laragon\\www\\laravel-practice\\app\\Http\\Controllers\\FrontendController.php&line=85\">\\app\\Http\\Controllers\\FrontendController.php:85-88<\/a>"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"models":{"data":[],"count":0},"gate":{"count":0,"messages":[]},"session":{"_token":"u4bkRsESXA8h9yIFKn3WNx2LsdPOoAZdZxU95Scc","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","_previous":"array:1 [\n  \"url\" => \"http:\/\/127.0.0.1:8000\/user-registration\"\n]","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/user-registration","status_code":"<pre class=sf-dump id=sf-dump-684469293 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-684469293\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-634829824 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-634829824\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-2103939325 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-2103939325\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-26459020 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"64 characters\">&quot;Google Chrome&quot;;v=&quot;111&quot;, &quot;Not(A:Brand&quot;;v=&quot;8&quot;, &quot;Chromium&quot;;v=&quot;111&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/111.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"27 characters\">http:\/\/127.0.0.1:8000\/login<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6Ilg5Nzc4RW5TRjRhUkFyd1BuVkY3bFE9PSIsInZhbHVlIjoiVXYxeXh6YThka3c4VEJ1a3phUTlaUXdlUUFNc2lGdkFHRk5nZHltUi9ub01FSlB0c25NOEN3aXNJUUpZYXM3SjdCSGJFYUVtaW0wRVZBS2wrZ3BZQUFxcEFrTlRBRmRJNWI4TmRTcC9pSjU5OFFDemZuOXR2aFVjTTc5bFhnWTciLCJtYWMiOiJlY2JmYmJmNzczOTAwYTgyMzU3ZDY0NzJlZDFjYTk5N2U4NzJjYWJhNDllZGQ0NmJhY2QyNGQ4NjhmNzVkMWZlIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ino1NDF2NUFhd2JsdE1yTDNyWDJpUFE9PSIsInZhbHVlIjoiQmE1RFNQNUlhUzY5c2ZEY1BacmtHZklmcnVjTTNXSHNFcVprcEhHaGJScXM0c283d3Qvc3c3bmVqc01DSGRWSlo2WVFkS0FIUXBxaDhlOEp0MzVTM3hNS2UybitWWGxrYisvUVdXVjNOalcyL0ROMGs3V2ZsYnZGaGhaK3gvYjEiLCJtYWMiOiI1YzQ1OTU1ZmM2MmVlMzQ4OTlhODE0ODEzYzEyNzliYzk2NzM1OGUzZTRmNjRhMTc2NTJlODZlMjM4NGFjMzhkIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-26459020\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-240839611 data-indent-pad=\"  \"><span class=sf-dump-note>array:31<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"38 characters\">C:\\laragon\\www\\laravel-practice\\public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">3639<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"29 characters\">PHP 8.1.10 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8000<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"18 characters\">\/user-registration<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"48 characters\">C:\\laragon\\www\\laravel-practice\\public\\index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"18 characters\">\/user-registration<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"28 characters\">\/index.php\/user-registration<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"64 characters\">&quot;Google Chrome&quot;;v=&quot;111&quot;, &quot;Not(A:Brand&quot;;v=&quot;8&quot;, &quot;Chromium&quot;;v=&quot;111&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/111.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">http:\/\/127.0.0.1:8000\/login<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6Ilg5Nzc4RW5TRjRhUkFyd1BuVkY3bFE9PSIsInZhbHVlIjoiVXYxeXh6YThka3c4VEJ1a3phUTlaUXdlUUFNc2lGdkFHRk5nZHltUi9ub01FSlB0c25NOEN3aXNJUUpZYXM3SjdCSGJFYUVtaW0wRVZBS2wrZ3BZQUFxcEFrTlRBRmRJNWI4TmRTcC9pSjU5OFFDemZuOXR2aFVjTTc5bFhnWTciLCJtYWMiOiJlY2JmYmJmNzczOTAwYTgyMzU3ZDY0NzJlZDFjYTk5N2U4NzJjYWJhNDllZGQ0NmJhY2QyNGQ4NjhmNzVkMWZlIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ino1NDF2NUFhd2JsdE1yTDNyWDJpUFE9PSIsInZhbHVlIjoiQmE1RFNQNUlhUzY5c2ZEY1BacmtHZklmcnVjTTNXSHNFcVprcEhHaGJScXM0c283d3Qvc3c3bmVqc01DSGRWSlo2WVFkS0FIUXBxaDhlOEp0MzVTM3hNS2UybitWWGxrYisvUVdXVjNOalcyL0ROMGs3V2ZsYnZGaGhaK3gvYjEiLCJtYWMiOiI1YzQ1OTU1ZmM2MmVlMzQ4OTlhODE0ODEzYzEyNzliYzk2NzM1OGUzZTRmNjRhMTc2NTJlODZlMjM4NGFjMzhkIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1680163092.2059<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1680163092<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-240839611\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1101107618 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">u4bkRsESXA8h9yIFKn3WNx2LsdPOoAZdZxU95Scc<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">KZwLglwIxICXFDWkyB6gcCjEmewiemXtdxkpR0sR<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1101107618\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-1210436351 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Thu, 30 Mar 2023 07:58:12 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6IlpQc3Y2NHYzZ1Y2bytPK3FCbWZ2UkE9PSIsInZhbHVlIjoibk5MQzNzQS9ZYk94YW1jamFBRFRSTi9KeGRGeXQwdk1xSG1oV2s4cUkzR1A3OURqcXJpR0Z3YzVUS0QrczF4WTBXakErZUZaMVJ1WkFCZmlIS0VldVp1Ti9DeHJuUEFwRHo2ZUZzbGtGcldGT2lwaUtHMDRsVlh0dTAwaVpEbE4iLCJtYWMiOiIzYTU2YzhhYTkwYTNmNjljOWU5MzU1MWVjOTEyODM5ZGJmNTUyZjAzZTBiNDgxZjc3NWQyNzE0YWY5YWJjNzMxIiwidGFnIjoiIn0%3D; expires=Thu, 30 Mar 2023 09:58:12 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"443 characters\">laravel_session=eyJpdiI6IkZYVTY2R1Vhcm1pUzBUaUtoNHpmSHc9PSIsInZhbHVlIjoiZEN2TTc2SUUrY24yWE1IZnpSeWtlSnpWVFd0QnphU2thUUZvNSthQnJ4N0M4TnZrUG5BdVVER3ZTSytkQUZ4RHIwWGZCaXQxOVRtNWJYQ1hNbzQ3MHFRNHVZTENiSXp0ekZ2UWxaak8vSEZGZkJxMHNWSFdnc3ZCczdoRWxYQ2wiLCJtYWMiOiI1NTU0YmI5NmQ3OTEzZjM0OWZmNWM0NzM3Nzg4ODhmYTAzMDQ0NTJjN2FiNmVjNTk0MTEzZTM0OTA2NmIwNDIxIiwidGFnIjoiIn0%3D; expires=Thu, 30 Mar 2023 09:58:12 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6IlpQc3Y2NHYzZ1Y2bytPK3FCbWZ2UkE9PSIsInZhbHVlIjoibk5MQzNzQS9ZYk94YW1jamFBRFRSTi9KeGRGeXQwdk1xSG1oV2s4cUkzR1A3OURqcXJpR0Z3YzVUS0QrczF4WTBXakErZUZaMVJ1WkFCZmlIS0VldVp1Ti9DeHJuUEFwRHo2ZUZzbGtGcldGT2lwaUtHMDRsVlh0dTAwaVpEbE4iLCJtYWMiOiIzYTU2YzhhYTkwYTNmNjljOWU5MzU1MWVjOTEyODM5ZGJmNTUyZjAzZTBiNDgxZjc3NWQyNzE0YWY5YWJjNzMxIiwidGFnIjoiIn0%3D; expires=Thu, 30-Mar-2023 09:58:12 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"415 characters\">laravel_session=eyJpdiI6IkZYVTY2R1Vhcm1pUzBUaUtoNHpmSHc9PSIsInZhbHVlIjoiZEN2TTc2SUUrY24yWE1IZnpSeWtlSnpWVFd0QnphU2thUUZvNSthQnJ4N0M4TnZrUG5BdVVER3ZTSytkQUZ4RHIwWGZCaXQxOVRtNWJYQ1hNbzQ3MHFRNHVZTENiSXp0ekZ2UWxaak8vSEZGZkJxMHNWSFdnc3ZCczdoRWxYQ2wiLCJtYWMiOiI1NTU0YmI5NmQ3OTEzZjM0OWZmNWM0NzM3Nzg4ODhmYTAzMDQ0NTJjN2FiNmVjNTk0MTEzZTM0OTA2NmIwNDIxIiwidGFnIjoiIn0%3D; expires=Thu, 30-Mar-2023 09:58:12 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1210436351\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-63153343 data-indent-pad=\"  \"><span class=sf-dump-note>array:4<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">u4bkRsESXA8h9yIFKn3WNx2LsdPOoAZdZxU95Scc<\/span>\"\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"39 characters\">http:\/\/127.0.0.1:8000\/user-registration<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-63153343\", {\"maxDepth\":0})<\/script>\n"}}, "Xd224bc8a699c2e135629d45382938990");

</script>
</body>


</html>  