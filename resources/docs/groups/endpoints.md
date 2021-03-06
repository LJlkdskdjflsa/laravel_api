# Endpoints


## Display Swagger API page.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/docs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/docs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>laravel api for forum app</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8001/docs/asset/swagger-ui.css?v=e0c78e200e261da7dc0a6d951ad17b50" >
  <link rel="icon" type="image/png" href="http://127.0.0.1:8001/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6" sizes="32x32" />
  <link rel="icon" type="image/png" href="http://127.0.0.1:8001/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384" sizes="16x16" />
  <style>
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
  </style>
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:absolute;width:0;height:0">
  <defs>
    <symbol viewBox="0 0 20 20" id="unlocked">
          <path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z"></path>
    </symbol>

    <symbol viewBox="0 0 20 20" id="locked">
      <path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="close">
      <path d="M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="large-arrow">
      <path d="M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z"/>
    </symbol>

    <symbol viewBox="0 0 20 20" id="large-arrow-down">
      <path d="M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z"/>
    </symbol>


    <symbol viewBox="0 0 24 24" id="jump-to">
      <path d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z"/>
    </symbol>

    <symbol viewBox="0 0 24 24" id="expand">
      <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
    </symbol>

  </defs>
</svg>

<div id="swagger-ui"></div>

<script src="http://127.0.0.1:8001/docs/asset/swagger-ui-bundle.js?v=bc5cbb73552e816ae3ca1561aceb3b8f"> </script>
<script src="http://127.0.0.1:8001/docs/asset/swagger-ui-standalone-preset.js?v=32fce84c3e9ba39c770e4bf6c80d76d4"> </script>
<script>
window.onload = function() {
  // Build a system
  const ui = SwaggerUIBundle({
    dom_id: '#swagger-ui',

    url: "http://127.0.0.1:8001/docs/api-docs.json",
    operationsSorter: null,
    configUrl: null,
    validatorUrl: null,
    oauth2RedirectUrl: "http://127.0.0.1:8001/api/oauth2-callback",

    requestInterceptor: function(request) {
      request.headers['X-CSRF-TOKEN'] = '';
      return request;
    },

    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],

    plugins: [
      SwaggerUIBundle.plugins.DownloadUrl
    ],

    layout: "StandaloneLayout"
  })

  window.ui = ui
}
</script>
</body>

</html>

```
<div id="execution-results-GETapi-docs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-docs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-docs"></code></pre>
</div>
<div id="execution-error-GETapi-docs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-docs"></code></pre>
</div>
<form id="form-GETapi-docs" data-method="GET" data-path="api/docs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-docs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-docs" onclick="tryItOut('GETapi-docs');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-docs" onclick="cancelTryOut('GETapi-docs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-docs" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/docs</code></b>
</p>
</form>


## Dump api-docs content endpoint. Supports dumping a json, or yaml file.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/docs/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/docs/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "File does not exist at path \/home\/lj\/laravel_api\/storage\/api-docs\/non.",
    "exception": "Illuminate\\Contracts\\Filesystem\\FileNotFoundException",
    "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Filesystem\/Filesystem.php",
    "line": 57,
    "trace": [
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Facades\/Facade.php",
            "line": 261,
            "function": "get",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Controllers\/SwaggerController.php",
            "line": 75,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "docs",
            "class": "L5Swagger\\Http\\Controllers\\SwaggerController",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Middleware\/Config.php",
            "line": 42,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "L5Swagger\\Http\\Middleware\\Config",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETdocs--jsonFile--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocs--jsonFile--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocs--jsonFile--"></code></pre>
</div>
<div id="execution-error-GETdocs--jsonFile--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocs--jsonFile--"></code></pre>
</div>
<form id="form-GETdocs--jsonFile--" data-method="GET" data-path="docs/{jsonFile?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocs--jsonFile--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocs--jsonFile--" onclick="tryItOut('GETdocs--jsonFile--');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocs--jsonFile--" onclick="cancelTryOut('GETdocs--jsonFile--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocs--jsonFile--" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>docs/{jsonFile?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jsonFile</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="jsonFile" data-endpoint="GETdocs--jsonFile--" data-component="url"  hidden>
<br>

</p>
</form>


## docs/asset/{asset}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/docs/asset/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/docs/asset/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "(omnis) - this L5 Swagger asset is not allowed",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Application.php",
    "line": 1113,
    "trace": [
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Controllers\/SwaggerAssetController.php",
            "line": 31,
            "function": "abort"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "index",
            "class": "L5Swagger\\Http\\Controllers\\SwaggerAssetController",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Middleware\/Config.php",
            "line": 42,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "L5Swagger\\Http\\Middleware\\Config",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETdocs-asset--asset-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocs-asset--asset-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocs-asset--asset-"></code></pre>
</div>
<div id="execution-error-GETdocs-asset--asset-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocs-asset--asset-"></code></pre>
</div>
<form id="form-GETdocs-asset--asset-" data-method="GET" data-path="docs/asset/{asset}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocs-asset--asset-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocs-asset--asset-" onclick="tryItOut('GETdocs-asset--asset-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocs-asset--asset-" onclick="cancelTryOut('GETdocs-asset--asset-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocs-asset--asset-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>docs/asset/{asset}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>asset</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="asset" data-endpoint="GETdocs-asset--asset-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display Oauth2 callback pages.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en-US">
<head>
    <title>Swagger UI: OAuth2 Redirect</title>
</head>
<body>
<script>
    'use strict';
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1);
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split("&");
        arr.forEach(function (v,i,_arr) { _arr[i] = '"' + v.replace('=', '":"') + '"';});
        qp = qp ? JSON.parse('{' + arr.join() + '}',
                function (key, value) {
                    return key === "" ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get("flow") === "accessCode" ||
          oauth2.auth.schema.get("flow") === "authorizationCode" ||
          oauth2.auth.schema.get("flow") === "authorization_code"
        ) && !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: "auth",
                    level: "warning",
                    message: "Authorization may be unsafe, passed state was changed in server Passed state wasn't returned from auth server"
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = "["+qp.error+"]: " +
                        (qp.error_description ? qp.error_description+ ". " : "no accessCode received from the server. ") +
                        (qp.error_uri ? "More info: "+qp.error_uri : "");
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: "auth",
                    level: "error",
                    message: oauthErrorMsg || "[Authorization failed]: no accessCode received from the server"
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    window.addEventListener('DOMContentLoaded', function () {
      run();
    });
</script>
</body>
</html>

```
<div id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-oauth2-callback"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"></code></pre>
</div>
<div id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback"></code></pre>
</div>
<form id="form-GETapi-oauth2-callback" data-method="GET" data-path="api/oauth2-callback" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-oauth2-callback" onclick="tryItOut('GETapi-oauth2-callback');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-oauth2-callback" onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-oauth2-callback" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/oauth2-callback</code></b>
</p>
</form>


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## api/user/register




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/user/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-register"></code></pre>
</div>
<div id="execution-error-POSTapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-register"></code></pre>
</div>
<form id="form-POSTapi-user-register" data-method="POST" data-path="api/user/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-register" onclick="tryItOut('POSTapi-user-register');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-register" onclick="cancelTryOut('POSTapi-user-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-register" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/register</code></b>
</p>
</form>


## api/user/login




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/user/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-login"></code></pre>
</div>
<div id="execution-error-POSTapi-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-login"></code></pre>
</div>
<form id="form-POSTapi-user-login" data-method="POST" data-path="api/user/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-login" onclick="tryItOut('POSTapi-user-login');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-login" onclick="cancelTryOut('POSTapi-user-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-login" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/login</code></b>
</p>
</form>


## api/posts




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "title": "Connie VonRueden",
        "user_id": 8,
        "author_name": "Einar Wintheiser",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 2,
        "title": "Peter King",
        "user_id": 4,
        "author_name": "Katrina Ward",
        "likes": 511,
        "dislikes": 489,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 3,
        "title": "Thelma Bradtke",
        "user_id": 2,
        "author_name": "Glen Pacocha",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 4,
        "title": "Evelyn Bartell Sr.",
        "user_id": 2,
        "author_name": "Glen Pacocha",
        "likes": 501,
        "dislikes": 499,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 5,
        "title": "Dr. Gisselle Dickens",
        "user_id": 10,
        "author_name": "Desmond Prohaska IV",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 6,
        "title": "Mrs. Blanca Romaguera PhD",
        "user_id": 3,
        "author_name": "Garrison Altenwerth",
        "likes": 494,
        "dislikes": 506,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 7,
        "title": "Miss Vernie D'Amore",
        "user_id": 3,
        "author_name": "Garrison Altenwerth",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 8,
        "title": "Raoul Schaefer",
        "user_id": 10,
        "author_name": "Desmond Prohaska IV",
        "likes": 516,
        "dislikes": 484,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 9,
        "title": "Kathlyn Heathcote",
        "user_id": 2,
        "author_name": "Glen Pacocha",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 10,
        "title": "Dr. Taryn Konopelski",
        "user_id": 5,
        "author_name": "Ericka Heaney",
        "likes": 508,
        "dislikes": 492,
        "created_at": "2021-05-06 07:50:55",
        "updated_at": "2021-05-06 07:50:55"
    },
    {
        "id": 11,
        "title": "T14_modifsadfkjlasdf",
        "user_id": 25,
        "author_name": "N14_update",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-10 06:09:37",
        "updated_at": "2021-05-10 06:10:22"
    }
]
```
<div id="execution-results-GETapi-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts"></code></pre>
</div>
<div id="execution-error-GETapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts"></code></pre>
</div>
<form id="form-GETapi-posts" data-method="GET" data-path="api/posts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts" onclick="tryItOut('GETapi-posts');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts" onclick="cancelTryOut('GETapi-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts</code></b>
</p>
</form>


## api/posts/{post}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/posts/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type bigint: \"qui\" (SQL: select * from \"posts\" where \"posts\".\"id\" = qui limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 678,
    "trace": [
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 638,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 346,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2313,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2301,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2796,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2302,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 588,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 572,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 242,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 376,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Traits\/ForwardsCalls.php",
            "line": 23,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 1890,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 1902,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/app\/Http\/Controllers\/PostsController.php",
            "line": 87,
            "function": "__callStatic",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\PostsController",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/sanctum\/src\/Http\/Middleware\/EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/sanctum\/src\/Http\/Middleware\/EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-posts--post-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--post-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--post-"></code></pre>
</div>
<div id="execution-error-GETapi-posts--post-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--post-"></code></pre>
</div>
<form id="form-GETapi-posts--post-" data-method="GET" data-path="api/posts/{post}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--post-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--post-" onclick="tryItOut('GETapi-posts--post-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--post-" onclick="cancelTryOut('GETapi-posts--post-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--post-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{post}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post" data-endpoint="GETapi-posts--post-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/posts/search/{title}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/posts/search/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts/search/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-posts-search--title-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts-search--title-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts-search--title-"></code></pre>
</div>
<div id="execution-error-GETapi-posts-search--title-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts-search--title-"></code></pre>
</div>
<form id="form-GETapi-posts-search--title-" data-method="GET" data-path="api/posts/search/{title}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts-search--title-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts-search--title-" onclick="tryItOut('GETapi-posts-search--title-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts-search--title-" onclick="cancelTryOut('GETapi-posts-search--title-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts-search--title-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/search/{title}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="GETapi-posts-search--title-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/commands




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/commands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/commands"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": 1,
        "post_id": 1,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 2,
        "user_id": 1,
        "post_id": 2,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 3,
        "user_id": 1,
        "post_id": 3,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 4,
        "user_id": 1,
        "post_id": 4,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 5,
        "user_id": 1,
        "post_id": 5,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 6,
        "user_id": 1,
        "post_id": 6,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 7,
        "user_id": 1,
        "post_id": 7,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 8,
        "user_id": 1,
        "post_id": 8,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 9,
        "user_id": 1,
        "post_id": 9,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 10,
        "user_id": 1,
        "post_id": 10,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 11,
        "user_id": 5,
        "post_id": 2,
        "content": "Selena Smitham II",
        "likes": 9,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 12,
        "user_id": 2,
        "post_id": 10,
        "content": "Dr. Fanny Hand V",
        "likes": 4,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 13,
        "user_id": 4,
        "post_id": 1,
        "content": "Kyleigh Jacobi",
        "likes": 8,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 14,
        "user_id": 8,
        "post_id": 8,
        "content": "Reanna Gleichner",
        "likes": 7,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 15,
        "user_id": 10,
        "post_id": 9,
        "content": "Katrina Aufderhar DVM",
        "likes": 2,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 16,
        "user_id": 5,
        "post_id": 8,
        "content": "Ms. Cydney Nikolaus DVM",
        "likes": 5,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 17,
        "user_id": 5,
        "post_id": 8,
        "content": "Cale Rippin DVM",
        "likes": 7,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 18,
        "user_id": 7,
        "post_id": 4,
        "content": "Sid Kohler",
        "likes": 8,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 19,
        "user_id": 6,
        "post_id": 5,
        "content": "Blake Lehner",
        "likes": 1,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 20,
        "user_id": 9,
        "post_id": 1,
        "content": "Meghan Durgan III",
        "likes": 10,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 21,
        "user_id": 7,
        "post_id": 9,
        "content": "Miss Noemi Sauer II",
        "likes": 2,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 22,
        "user_id": 8,
        "post_id": 7,
        "content": "Harmon Ritchie II",
        "likes": 9,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 23,
        "user_id": 5,
        "post_id": 9,
        "content": "Marcel Wisoky",
        "likes": 3,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 24,
        "user_id": 8,
        "post_id": 1,
        "content": "Warren Leuschke",
        "likes": 6,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 25,
        "user_id": 8,
        "post_id": 2,
        "content": "Elian Zulauf",
        "likes": 5,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 26,
        "user_id": 4,
        "post_id": 6,
        "content": "Marcella Jerde",
        "likes": 1,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 27,
        "user_id": 2,
        "post_id": 4,
        "content": "Hulda Stokes",
        "likes": 1,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 28,
        "user_id": 2,
        "post_id": 7,
        "content": "Steve VonRueden Jr.",
        "likes": 5,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 29,
        "user_id": 10,
        "post_id": 5,
        "content": "Helga Conroy",
        "likes": 2,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 30,
        "user_id": 8,
        "post_id": 9,
        "content": "Kurt Zboncak",
        "likes": 2,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 31,
        "user_id": 1,
        "post_id": 8,
        "content": "Imani Borer",
        "likes": 5,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 32,
        "user_id": 8,
        "post_id": 10,
        "content": "Georgiana Jast",
        "likes": 4,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 33,
        "user_id": 7,
        "post_id": 5,
        "content": "Ms. Althea Emard DDS",
        "likes": 5,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 34,
        "user_id": 7,
        "post_id": 3,
        "content": "Demario Cummings",
        "likes": 9,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 35,
        "user_id": 9,
        "post_id": 5,
        "content": "Einar Harber",
        "likes": 1,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 36,
        "user_id": 2,
        "post_id": 9,
        "content": "George Reilly",
        "likes": 6,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 37,
        "user_id": 4,
        "post_id": 6,
        "content": "Carmel Windler",
        "likes": 6,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 38,
        "user_id": 3,
        "post_id": 8,
        "content": "Murphy Bergstrom",
        "likes": 9,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 39,
        "user_id": 2,
        "post_id": 7,
        "content": "Valentin Mosciski",
        "likes": 6,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 40,
        "user_id": 7,
        "post_id": 7,
        "content": "Alvina Walker",
        "likes": 2,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 41,
        "user_id": 5,
        "post_id": 2,
        "content": "Dr. Ayla O'Hara",
        "likes": 3,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 42,
        "user_id": 7,
        "post_id": 5,
        "content": "Brody Heathcote",
        "likes": 8,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 43,
        "user_id": 3,
        "post_id": 9,
        "content": "Sonny Wolff DDS",
        "likes": 3,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 44,
        "user_id": 4,
        "post_id": 10,
        "content": "Mrs. Delphine McClure",
        "likes": 6,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 45,
        "user_id": 4,
        "post_id": 9,
        "content": "Golda Wuckert",
        "likes": 8,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 46,
        "user_id": 3,
        "post_id": 1,
        "content": "Esta Schiller IV",
        "likes": 4,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 47,
        "user_id": 5,
        "post_id": 2,
        "content": "Julius Kuphal",
        "likes": 8,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 48,
        "user_id": 1,
        "post_id": 8,
        "content": "Shanel King Sr.",
        "likes": 4,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 49,
        "user_id": 6,
        "post_id": 6,
        "content": "Stefan Kassulke",
        "likes": 10,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 50,
        "user_id": 6,
        "post_id": 3,
        "content": "Julius Mohr",
        "likes": 4,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 51,
        "user_id": 5,
        "post_id": 5,
        "content": "Delta Sauer",
        "likes": 1,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 52,
        "user_id": 7,
        "post_id": 3,
        "content": "Hulda Nitzsche Jr.",
        "likes": 4,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 53,
        "user_id": 3,
        "post_id": 5,
        "content": "Tiara Roob",
        "likes": 5,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 54,
        "user_id": 1,
        "post_id": 5,
        "content": "Miss Alysa Schneider MD",
        "likes": 8,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 55,
        "user_id": 6,
        "post_id": 7,
        "content": "Dr. Lisandro Robel V",
        "likes": 10,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 56,
        "user_id": 2,
        "post_id": 8,
        "content": "Timmy Pacocha",
        "likes": 6,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 57,
        "user_id": 1,
        "post_id": 4,
        "content": "Prof. Arnaldo Zboncak Jr.",
        "likes": 1,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 58,
        "user_id": 8,
        "post_id": 4,
        "content": "Dr. Braden Carroll",
        "likes": 4,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 59,
        "user_id": 8,
        "post_id": 3,
        "content": "Lourdes Kuhic",
        "likes": 10,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 60,
        "user_id": 7,
        "post_id": 9,
        "content": "Prof. Reynold Abernathy",
        "likes": 10,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 61,
        "user_id": 3,
        "post_id": 7,
        "content": "Miss Estrella Stokes II",
        "likes": 8,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 62,
        "user_id": 10,
        "post_id": 10,
        "content": "Al Robel III",
        "likes": 9,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 63,
        "user_id": 1,
        "post_id": 4,
        "content": "Mrs. Sydnie Kilback II",
        "likes": 3,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 64,
        "user_id": 5,
        "post_id": 10,
        "content": "Turner Schroeder III",
        "likes": 5,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 65,
        "user_id": 5,
        "post_id": 8,
        "content": "Miss Antonetta Renner V",
        "likes": 5,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 66,
        "user_id": 4,
        "post_id": 8,
        "content": "Ethel Gislason",
        "likes": 2,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 67,
        "user_id": 9,
        "post_id": 10,
        "content": "Verla Schinner II",
        "likes": 6,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 68,
        "user_id": 5,
        "post_id": 8,
        "content": "Gardner Erdman",
        "likes": 1,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 69,
        "user_id": 1,
        "post_id": 2,
        "content": "Myrtis Schoen",
        "likes": 1,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 70,
        "user_id": 10,
        "post_id": 6,
        "content": "Manuela Murazik",
        "likes": 10,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 71,
        "user_id": 8,
        "post_id": 2,
        "content": "Dave Bednar",
        "likes": 2,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 72,
        "user_id": 7,
        "post_id": 5,
        "content": "Wilbert Beahan",
        "likes": 8,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 73,
        "user_id": 2,
        "post_id": 10,
        "content": "Andreanne Aufderhar II",
        "likes": 1,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 74,
        "user_id": 10,
        "post_id": 5,
        "content": "Mr. Trever McLaughlin Jr.",
        "likes": 1,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 75,
        "user_id": 6,
        "post_id": 7,
        "content": "Mr. Luciano Lockman MD",
        "likes": 5,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 76,
        "user_id": 5,
        "post_id": 3,
        "content": "Clyde Turcotte",
        "likes": 10,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 77,
        "user_id": 3,
        "post_id": 10,
        "content": "Prof. Jaren Mitchell DVM",
        "likes": 9,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 78,
        "user_id": 7,
        "post_id": 6,
        "content": "Cordelia Cummerata PhD",
        "likes": 5,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 79,
        "user_id": 5,
        "post_id": 6,
        "content": "Minerva Blick",
        "likes": 9,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 80,
        "user_id": 1,
        "post_id": 2,
        "content": "Ally Block",
        "likes": 4,
        "dislikes": 9,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 81,
        "user_id": 8,
        "post_id": 5,
        "content": "Barry Breitenberg",
        "likes": 10,
        "dislikes": 3,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 82,
        "user_id": 3,
        "post_id": 5,
        "content": "Darion Kiehn",
        "likes": 1,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 83,
        "user_id": 5,
        "post_id": 6,
        "content": "Erin West",
        "likes": 1,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 84,
        "user_id": 10,
        "post_id": 10,
        "content": "Mrs. Lorine Walsh",
        "likes": 10,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 85,
        "user_id": 9,
        "post_id": 4,
        "content": "Prof. Lincoln Rath",
        "likes": 3,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 86,
        "user_id": 4,
        "post_id": 2,
        "content": "Cedrick Franecki DDS",
        "likes": 1,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 87,
        "user_id": 3,
        "post_id": 10,
        "content": "Prof. Xavier Considine DDS",
        "likes": 10,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 88,
        "user_id": 5,
        "post_id": 5,
        "content": "Seamus Littel",
        "likes": 10,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 89,
        "user_id": 9,
        "post_id": 10,
        "content": "Janet Bartell",
        "likes": 2,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 90,
        "user_id": 9,
        "post_id": 9,
        "content": "Milo Nader",
        "likes": 6,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 91,
        "user_id": 3,
        "post_id": 3,
        "content": "Willard Emmerich",
        "likes": 10,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 92,
        "user_id": 5,
        "post_id": 10,
        "content": "Mrs. Hettie Lebsack",
        "likes": 2,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 93,
        "user_id": 7,
        "post_id": 10,
        "content": "Herbert Runte",
        "likes": 2,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 94,
        "user_id": 7,
        "post_id": 8,
        "content": "Caroline Eichmann",
        "likes": 10,
        "dislikes": 2,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 95,
        "user_id": 6,
        "post_id": 3,
        "content": "Elisha Breitenberg PhD",
        "likes": 8,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 96,
        "user_id": 8,
        "post_id": 9,
        "content": "Amparo Hayes",
        "likes": 8,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 97,
        "user_id": 1,
        "post_id": 3,
        "content": "Ms. Kira Heaney III",
        "likes": 9,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 98,
        "user_id": 4,
        "post_id": 3,
        "content": "Brennon Mosciski",
        "likes": 7,
        "dislikes": 5,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 99,
        "user_id": 6,
        "post_id": 2,
        "content": "Dr. Garry Baumbach V",
        "likes": 2,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 100,
        "user_id": 3,
        "post_id": 6,
        "content": "Jarret Grimes",
        "likes": 3,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 101,
        "user_id": 8,
        "post_id": 1,
        "content": "Rodger Graham",
        "likes": 9,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 102,
        "user_id": 9,
        "post_id": 8,
        "content": "Jan Crona",
        "likes": 1,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 103,
        "user_id": 10,
        "post_id": 4,
        "content": "Ilene Reichel",
        "likes": 8,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 104,
        "user_id": 4,
        "post_id": 7,
        "content": "Clovis Reynolds",
        "likes": 9,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 105,
        "user_id": 2,
        "post_id": 1,
        "content": "Dylan Auer",
        "likes": 2,
        "dislikes": 1,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 106,
        "user_id": 2,
        "post_id": 3,
        "content": "Mr. Martin Mueller PhD",
        "likes": 6,
        "dislikes": 7,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 107,
        "user_id": 4,
        "post_id": 6,
        "content": "Prof. Alaina Murray",
        "likes": 7,
        "dislikes": 8,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 108,
        "user_id": 4,
        "post_id": 7,
        "content": "Prof. Leslie Lindgren",
        "likes": 4,
        "dislikes": 10,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 109,
        "user_id": 2,
        "post_id": 1,
        "content": "Cora Conroy",
        "likes": 7,
        "dislikes": 6,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 110,
        "user_id": 8,
        "post_id": 10,
        "content": "Armani Rohan V",
        "likes": 4,
        "dislikes": 4,
        "created_at": "2021-05-06T07:50:55.000000Z",
        "updated_at": "2021-05-06T07:50:55.000000Z"
    },
    {
        "id": 111,
        "user_id": 25,
        "post_id": 11,
        "content": "first",
        "likes": 0,
        "dislikes": 0,
        "created_at": "2021-05-10T06:09:37.000000Z",
        "updated_at": "2021-05-10T06:09:37.000000Z"
    }
]
```
<div id="execution-results-GETapi-commands" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-commands"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-commands"></code></pre>
</div>
<div id="execution-error-GETapi-commands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-commands"></code></pre>
</div>
<form id="form-GETapi-commands" data-method="GET" data-path="api/commands" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-commands', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-commands" onclick="tryItOut('GETapi-commands');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-commands" onclick="cancelTryOut('GETapi-commands');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-commands" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/commands</code></b>
</p>
</form>


## api/posts/{post}/commands




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/posts/rerum/commands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts/rerum/commands"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type bigint: \"rerum\" (SQL: select * from \"commands\" where \"post_id\" = rerum)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 678,
    "trace": [
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 638,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 346,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2313,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2301,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2796,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2302,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 588,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 572,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/app\/Http\/Controllers\/CommandsController.php",
            "line": 51,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\CommandsController",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 695,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/sanctum\/src\/Http\/Middleware\/EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/sanctum\/src\/Http\/Middleware\/EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 697,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 672,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/symfony\/console\/Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/lj\/laravel_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-posts--post--commands" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-posts--post--commands"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--post--commands"></code></pre>
</div>
<div id="execution-error-GETapi-posts--post--commands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--post--commands"></code></pre>
</div>
<form id="form-GETapi-posts--post--commands" data-method="GET" data-path="api/posts/{post}/commands" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--post--commands', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-posts--post--commands" onclick="tryItOut('GETapi-posts--post--commands');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-posts--post--commands" onclick="cancelTryOut('GETapi-posts--post--commands');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-posts--post--commands" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/posts/{post}/commands</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>post</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="post" data-endpoint="GETapi-posts--post--commands" data-component="url" required  hidden>
<br>

</p>
</form>


## api/user/profile




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/user/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-profile"></code></pre>
</div>
<div id="execution-error-POSTapi-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-profile"></code></pre>
</div>
<form id="form-POSTapi-user-profile" data-method="POST" data-path="api/user/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-profile" onclick="tryItOut('POSTapi-user-profile');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-profile" onclick="cancelTryOut('POSTapi-user-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-profile" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/profile</code></b>
</p>
</form>


## api/user/logout




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-user-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-logout"></code></pre>
</div>
<form id="form-POSTapi-user-logout" data-method="POST" data-path="api/user/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-logout" onclick="tryItOut('POSTapi-user-logout');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-logout" onclick="cancelTryOut('POSTapi-user-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-logout" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/logout</code></b>
</p>
</form>


## api/user/update




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/user/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user-update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-update"></code></pre>
</div>
<div id="execution-error-POSTapi-user-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-update"></code></pre>
</div>
<form id="form-POSTapi-user-update" data-method="POST" data-path="api/user/update" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-update" onclick="tryItOut('POSTapi-user-update');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-update" onclick="cancelTryOut('POSTapi-user-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-update" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/update</code></b>
</p>
</form>


## api/posts




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-posts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-posts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts"></code></pre>
</div>
<div id="execution-error-POSTapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts"></code></pre>
</div>
<form id="form-POSTapi-posts" data-method="POST" data-path="api/posts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-posts" onclick="tryItOut('POSTapi-posts');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-posts" onclick="cancelTryOut('POSTapi-posts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-posts" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/posts</code></b>
</p>
</form>


## api/posts/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8001/api/posts/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-posts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-posts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-posts--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-posts--id-"></code></pre>
</div>
<form id="form-PUTapi-posts--id-" data-method="PUT" data-path="api/posts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-posts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-posts--id-" onclick="tryItOut('PUTapi-posts--id-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-posts--id-" onclick="cancelTryOut('PUTapi-posts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-posts--id-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/posts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-posts--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/posts/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8001/api/posts/ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/posts/ab"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-posts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-posts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-posts--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-posts--id-"></code></pre>
</div>
<form id="form-DELETEapi-posts--id-" data-method="DELETE" data-path="api/posts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-posts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-posts--id-" onclick="tryItOut('DELETEapi-posts--id-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-posts--id-" onclick="cancelTryOut('DELETEapi-posts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-posts--id-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/posts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-posts--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/commands




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/commands" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/commands"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-commands" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-commands"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-commands"></code></pre>
</div>
<div id="execution-error-POSTapi-commands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-commands"></code></pre>
</div>
<form id="form-POSTapi-commands" data-method="POST" data-path="api/commands" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-commands', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-commands" onclick="tryItOut('POSTapi-commands');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-commands" onclick="cancelTryOut('POSTapi-commands');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-commands" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/commands</code></b>
</p>
</form>


## api/commands/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8001/api/commands/dolore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/commands/dolore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-commands--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-commands--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-commands--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-commands--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-commands--id-"></code></pre>
</div>
<form id="form-DELETEapi-commands--id-" data-method="DELETE" data-path="api/commands/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-commands--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-commands--id-" onclick="tryItOut('DELETEapi-commands--id-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-commands--id-" onclick="cancelTryOut('DELETEapi-commands--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-commands--id-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/commands/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-commands--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/vote




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8001/api/vote" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/vote"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-vote" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-vote"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-vote"></code></pre>
</div>
<div id="execution-error-POSTapi-vote" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-vote"></code></pre>
</div>
<form id="form-POSTapi-vote" data-method="POST" data-path="api/vote" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-vote', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-vote" onclick="tryItOut('POSTapi-vote');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-vote" onclick="cancelTryOut('POSTapi-vote');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-vote" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/vote</code></b>
</p>
</form>


## api/vote/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8001/api/vote/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/vote/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-vote--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-vote--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-vote--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-vote--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-vote--id-"></code></pre>
</div>
<form id="form-DELETEapi-vote--id-" data-method="DELETE" data-path="api/vote/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-vote--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-vote--id-" onclick="tryItOut('DELETEapi-vote--id-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-vote--id-" onclick="cancelTryOut('DELETEapi-vote--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-vote--id-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/vote/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-vote--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8001/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8001/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v8.37.0 (PHP v8.0.3)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ???</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request ????</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



