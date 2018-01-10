<!DOCTYPE html><html><head><meta charset="utf-8"><title>Dynamarine Vessels Reports API</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');@import url('https://fonts.googleapis.com/css?family=Roboto:100,400,700|Source+Code+Pro');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}.hljs-comment{color:#969896}.css .hljs-class,.css .hljs-id,.css .hljs-pseudo,.hljs-attribute,.hljs-regexp,.hljs-tag,.hljs-variable,.html .hljs-doctype,.ruby .hljs-constant,.xml .hljs-doctype,.xml .hljs-pi,.xml .hljs-tag .hljs-title{color:#77A619}.hljs-literal{color:#A69819}.hljs-built_in,.hljs-constant,.hljs-number,.hljs-params,.hljs-pragma,.hljs-preprocessor{color:#1B88B3}.css .hljs-rule .hljs-attribute,.ruby .hljs-class .hljs-title{color:#A37518}.hljs-header,.hljs-inheritance,.hljs-name,.hljs-string,.hljs-value,.ruby .hljs-symbol,.xml .hljs-cdata{color:inherit}.coffeescript .hljs-title,.css .hljs-hexcolor,.hljs-function,.hljs-title,.javascript .hljs-title,.perl .hljs-sub,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword{color:#A63A4A}.hljs-keyword,.javascript .hljs-function{color:#A69819}.hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .css,.xml .hljs-cdata,.xml .javascript,.xml .vbscript{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#C1EF65}.right .hljs-literal{color:#EBDE68}.right .hljs-built_in,.right .hljs-constant,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#77BCD7}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:inherit}.right .coffeescript .hljs-title,.right .css .hljs-hexcolor,.right .hljs-function,.right .hljs-title,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#f099a6}.right .hljs-keyword,.right .javascript .hljs-function{color:#EBDE68}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:#4c555a;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid transparent;margin-bottom:12px}h1,h2,h3,h4,h5{color:#292e31;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:100 36px 'Roboto',Helvetica,sans-serif;font-size:36px}h2{font:100 36px 'Roboto',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#0099e5;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(76,85,90,0) 20%, rgba(76,85,90,0.2) 48%, rgba(221,228,232,0.2) 48%, rgba(221,228,232,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(76,85,90,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:3px;overflow:auto}pre code{color:#4c555a;background-color:transparent;padding:0;border:none}code{color:#b93d6a;background-color:#f5f5f5;font:13px / 19.5px 'Source Code Pro',Menlo,monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:100 36px 'Roboto',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:#4c555a;background-color:#ebf7fd;border-left:4px solid #0099e5}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#0099e5}.warning{color:#4c555a;background-color:#faf0f4;border-left:4px solid #B82E5F}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#B82E5F}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:#4c555a;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:underline;background-color:transparent;border-left:2px solid transparent}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(76,85,90,0.7);padding:8px 12px;border-top:1px solid transparent;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:underline;background-color:transparent;border-left:2px solid transparent}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:black;background-color:transparent;border-radius:10px;margin:-2px -8px -2px 0}.badge.get{color:#fff;background-color:#ddf1fc}.badge.head{color:#fff;background-color:#ddf1fc}.badge.options{color:#fff;background-color:#ddf1fc}.badge.put{color:#fff;background-color:#f7f2c3}.badge.patch{color:#fff;background-color:#f7f2c3}.badge.post{color:#fff;background-color:#e4f2c8}.badge.delete{color:#fff;background-color:#f2d8e1}.collapse-button{float:right}.collapse-button .close{display:none;color:#0099e5;cursor:pointer}.collapse-button .open{color:#0099e5;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:15%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:15%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:48%;padding-right:12px}.right{box-sizing:border-box;float:right;width:52%;padding-left:12px}.right a{color:#0099e5}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:#dde4e8}.right pre{background-color:#272B2D;border:1px solid #272B2D}.right pre code{color:#D0D0D0}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e8ab8}.definition .method.head{color:#2e8ab8}.definition .method.options{color:#2e8ab8}.definition .method.post{color:#8ab82e}.definition .method.put{color:#b8aa2e}.definition .method.patch{color:#b8aa2e}.definition .method.delete{color:#b82e5f}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:3px}.example-names .tab-button{cursor:pointer;color:#4c555a;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#424648}.right .example-names .tab-button{color:#dde4e8;border:1px solid #6C6F71;border-radius:3px}.right .example-names .tab-button.active{background-color:#5a6063}#nav-background{position:fixed;left:0;top:0;bottom:0;width:15%;padding-right:14.4px;background-color:#fafcfc;border-right:1px solid #f0f4f7;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:52%;background-color:#2d3134;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:52%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(76,85,90,0.5);background-color:transparent;text-decoration:none !important;border-top:1px solid transparent;border-left:1px solid transparent;border-right:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px 12px 12px 0;margin-bottom:12px;background-color:transparent;border:1px solid transparent;border-radius:3px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px 12px 12px 0;margin:0 0 12px 0;background-color:transparent;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid transparent}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:3px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:2px;display:inline-block}.action h4.action-heading .method.get{color:#fff;background-color:#0099e5}.action h4.action-heading .method.head{color:#fff;background-color:#0099e5}.action h4.action-heading .method.options{color:#fff;background-color:#0099e5}.action h4.action-heading .method.put{color:#fff;background-color:#b1a74e}.action h4.action-heading .method.patch{color:#fff;background-color:#b1a74e}.action h4.action-heading .method.post{color:#fff;background-color:#85a546}.action h4.action-heading .method.delete{color:#fff;background-color:#c14a74}.action h4.action-heading code{color:#444;background-color:#f5f5f5;border-color:#cfcfcf;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid transparent;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#ddf1fc}.action.get h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.head{border-color:#ddf1fc}.action.head h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.options{border-color:#ddf1fc}.action.options h4.action-heading{color:#0099e5;background:#ddf1fc;border-bottom-color:#ddf1fc}.action.post{border-color:#e4f2c8}.action.post h4.action-heading{color:#85a546;background:#e4f2c8;border-bottom-color:#e4f2c8}.action.put{border-color:#f7f2c3}.action.put h4.action-heading{color:#b1a74e;background:#f7f2c3;border-bottom-color:#f7f2c3}.action.patch{border-color:#f7f2c3}.action.patch h4.action-heading{color:#b1a74e;background:#f7f2c3;border-bottom-color:#f7f2c3}.action.delete{border-color:#f2d8e1}.action.delete h4.action-heading{color:#c14a74;background:#f2d8e1;border-bottom-color:#f2d8e1}</style></head><body class="preload"><div id="nav-background"></div><div class="container-fluid triple"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#top">Overview</a></div><div class="collapse-content"><ul><li><a href="#header-rate-limiting">Rate Limiting</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#vessels">Vessels</a></div><div class="collapse-content"><ul><li><a href="#vessels-vessels-collection">Vessels Collection</a><ul><li><a href="#vessels-vessels-collection-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get All Vessels</a></li><li><a href="#vessels-vessels-collection-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get Specific Vessel</a></li><li><a href="#vessels-vessels-collection-get-2"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get Specific Vessel Reports</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#reports">Reports</a></div><div class="collapse-content"><ul><li><a href="#reports-reports-collection">Reports Collection</a><ul><li><a href="#reports-reports-collection-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get All Reports</a></li><li><a href="#reports-reports-collection-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get Specific Report</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#users">Users</a></div><div class="collapse-content"><ul><li><a href="#users-users-collection">Users Collection</a><ul><li><a href="#users-users-collection-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get All Users</a></li><li><a href="#users-users-collection-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get Specific User</a></li><li><a href="#users-users-collection-get-2"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get Specific User Requests</a></li></ul></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="http://manoloudis.gr">http://manoloudis.gr</a></p></nav><div class="content"><div id="right-panel-background"></div><div class="middle"><header><h1 id="top">Dynamarine Vessels Reports API</h1></header></div><div class="right"><h5>API Endpoint</h5><a href="http://manoloudis.gr">http://manoloudis.gr</a></div><div class="middle"><p>Api for Vessels and Vessel reports</p>
<h2 id="header-rate-limiting">Rate Limiting <a class="permalink" href="#header-rate-limiting" aria-hidden="true">¶</a></h2>
<p>Service is rate-limited. Requests are limited to 5/hour per ip</p>
</div><div class="middle"><section id="vessels" class="resource-group"><h2 class="group-heading">Vessels <a href="#vessels" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="vessels-vessels-collection" class="resource"><h3 class="resource-heading">Vessels Collection <a href="#vessels-vessels-collection" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/vessels</span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">vessels</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">imo</span>": <span class="hljs-value"><span class="hljs-number">9327475</span></span>,
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Vessel A"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"vessela@dynamarine.com"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">vessels</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="vessels-vessels-collection-get" class="action get"><h4 class="action-heading"><div class="name">Get All Vessels</div><a href="#vessels-vessels-collection-get" class="method get">GET</a><code class="uri">/vessels</code></h4><p>Get all Vessels stored in Database</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/vessel/<span class="hljs-attribute" title="id">1</span></span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">imo</span>": <span class="hljs-value"><span class="hljs-number">9327475</span></span>,
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Vessel A"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"vessela@dynamarine.com"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">imo</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Unique Identification number of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Name of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Unique email of the Vessel"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="vessels-vessels-collection-get-1" class="action get"><h4 class="action-heading"><div class="name">Get Specific Vessel</div><a href="#vessels-vessels-collection-get-1" class="method get">GET</a><code class="uri">/vessel/{id}</code></h4><p>Get Specific Vessel information</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>The ID of the Vessel</p>
</dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/vessel/<span class="hljs-attribute" title="id">1</span>/reports</span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">imo</span>": <span class="hljs-value"><span class="hljs-number">9327475</span></span>,
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Vessel A"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"vessela@dynamarine.com"</span></span>,
  "<span class="hljs-attribute">reports</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">conditionType</span>": <span class="hljs-value"><span class="hljs-string">"steaming"</span></span>,
      "<span class="hljs-attribute">meHours</span>": <span class="hljs-value"><span class="hljs-string">"24.0"</span></span>,
      "<span class="hljs-attribute">meCons</span>": <span class="hljs-value"><span class="hljs-string">"2.20"</span></span>,
      "<span class="hljs-attribute">auxHours</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">auxCons</span>": <span class="hljs-value"><span class="hljs-string">"0.00"</span></span>,
      "<span class="hljs-attribute">observedDistance</span>": <span class="hljs-value"><span class="hljs-string">"69.9"</span></span>,
      "<span class="hljs-attribute">created_on</span>": <span class="hljs-value"><span class="hljs-string">"2016-01-01 10:50:20"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">imo</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Unique Identification number of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Name of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Unique email of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">reports</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="vessels-vessels-collection-get-2" class="action get"><h4 class="action-heading"><div class="name">Get Specific Vessel Reports</div><a href="#vessels-vessels-collection-get-2" class="method get">GET</a><code class="uri">/vessel/{id}/reports</code></h4><p>Get Specific Vessel information with all its Reports.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>The ID of the Vessel</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="reports" class="resource-group"><h2 class="group-heading">Reports <a href="#reports" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="reports-reports-collection" class="resource"><h3 class="resource-heading">Reports Collection <a href="#reports-reports-collection" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/reports?<span class="hljs-attribute">vessels=</span><span class="hljs-literal"></span>&<span class="hljs-attribute">fuel_consumption=</span><span class="hljs-literal"></span>&<span class="hljs-attribute">condition=</span><span class="hljs-literal">steaming</span>&<span class="hljs-attribute">date_from=</span><span class="hljs-literal">2017-12-01</span>&<span class="hljs-attribute">date_to=</span><span class="hljs-literal">2017-12-31</span>&<span class="hljs-attribute">format=</span><span class="hljs-literal">csv</span></span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">Reports</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">conditionType</span>": <span class="hljs-value"><span class="hljs-string">"steaming"</span></span>,
      "<span class="hljs-attribute">meHours</span>": <span class="hljs-value"><span class="hljs-string">"24.0"</span></span>,
      "<span class="hljs-attribute">meCons</span>": <span class="hljs-value"><span class="hljs-string">"2.20"</span></span>,
      "<span class="hljs-attribute">auxHours</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">auxCons</span>": <span class="hljs-value"><span class="hljs-string">"0.00"</span></span>,
      "<span class="hljs-attribute">observedDistance</span>": <span class="hljs-value"><span class="hljs-string">"69.9"</span></span>,
      "<span class="hljs-attribute">created_on</span>": <span class="hljs-value"><span class="hljs-string">"2016-01-01 10:50:20"</span></span>,
      "<span class="hljs-attribute">vessel</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">imo</span>": <span class="hljs-value"><span class="hljs-number">9327475</span></span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"vessela@dynamarine.com"</span>
      </span>}
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">Reports</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Vessel_imo,Vessel_email,created_on,conditionType,meHours,meCons,auxHours,auxCons,observedDistance
<span class="hljs-number">9275983</span>,vesselb@dynamarine.com,<span class="hljs-string">"2016-01-01 02:15:05"</span>,steaming,<span class="hljs-number">24.0</span>,<span class="hljs-number">24.69</span>,<span class="hljs-number">24</span>,<span class="hljs-number">2.03</span>,<span class="hljs-number">333.0</span>
<span class="hljs-number">9224570</span>,vesselc@dynamarine.com,<span class="hljs-string">"2016-01-02 12:15:35"</span>,steaming,<span class="hljs-number">25.0</span>,<span class="hljs-number">21.03</span>,<span class="hljs-number">0</span>,<span class="hljs-number">0.00</span>,<span class="hljs-number">318.0</span></code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="reports-reports-collection-get" class="action get"><h4 class="action-heading"><div class="name">Get All Reports</div><a href="#reports-reports-collection-get" class="method get">GET</a><code class="uri">/reports{?vessels,fuel_consumption,condition,date_from,date_to,format}</code></h4><p>Get all Reports in Database or use Filters narrow the results.</p>
<p>Available filters:</p>
<ol>
<li>vessels[]</li>
<li>fuel_consumption[main|auxiliary][greater|lower]</li>
<li>condition</li>
<li>date_from</li>
<li>date_to</li>
</ol>
<p>Available Response formats are application/json and plain/text in csv logic.</p>
<p>You can change the default application/json format to csv with the use on format parameter.</p>
<p>Request example. <a href="http://manoloudis.gr/reports?vessels%5B%5D=9327475&amp;fuel_consumption%5Bmain%5D%5Bgreater%5D=2.5&amp;condition=steaming&amp;date_from=2016-01-01&amp;date_to=2018-01-10&amp;format=csv">http://manoloudis.gr/reports?vessels[]=9327475&amp;fuel_consumption[main][greater]=2.5&amp;condition=steaming&amp;date_from=2016-01-01&amp;date_to=2018-01-10&amp;format=csv</a></p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>vessels</dt><dd><code>array[number]</code>&nbsp;<span>(optional)</span>&nbsp;<p>Filter Reports by one or more Vessel imo numbers.</p>
</dd><dt>fuel_consumption</dt><dd><code>array[main|auxiliary][greater|lower]</code>&nbsp;<span>(optional)</span>&nbsp;<p>Filter Reports by Fuel Consumption on Main or Auxiliary Engine. Search for greater or/and lower values.</p>
<ul>
<li>
<p>main: (array)</p>
<ul>
<li>greater: <code>5</code> (number)</li>
<li>lower: <code>10.5</code> (number)</li>
</ul>
</li>
<li>
<p>auxiliary: (array)</p>
<ul>
<li>greater: <code>5</code> (number)</li>
<li>lower: <code>10</code> (number)</li>
</ul>
</li>
</ul>
</dd><dt>condition</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>steaming</span></span><p class="choices"><strong>Choices:&nbsp;</strong><code>steaming</code> <code>anchor</code> </p></dd><dt>date_from</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2017-12-01</span></span><p>Filter Reports by date, get all that are equal or greater than requested value.</p>
</dd><dt>date_to</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2017-12-31</span></span><p>Filter Reports by date, get all that are equal or lower than requested value.</p>
</dd><dt>format</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>csv</span></span><p>Select Response type between json and csv. Default Response type json</p>
</dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/reports/<span class="hljs-attribute" title="id">1</span></span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">conditionType</span>": <span class="hljs-value"><span class="hljs-string">"steaming"</span></span>,
  "<span class="hljs-attribute">meHours</span>": <span class="hljs-value"><span class="hljs-string">"24.0"</span></span>,
  "<span class="hljs-attribute">meCons</span>": <span class="hljs-value"><span class="hljs-string">"2.20"</span></span>,
  "<span class="hljs-attribute">auxHours</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">auxCons</span>": <span class="hljs-value"><span class="hljs-string">"0.00"</span></span>,
  "<span class="hljs-attribute">observedDistance</span>": <span class="hljs-value"><span class="hljs-string">"69.9"</span></span>,
  "<span class="hljs-attribute">created_on</span>": <span class="hljs-value"><span class="hljs-string">"2016-01-01 10:50:20"</span></span>,
  "<span class="hljs-attribute">vessel</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">imo</span>": <span class="hljs-value"><span class="hljs-number">9327475</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"vessela@dynamarine.com"</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the Report"</span>
    </span>}</span>,
    "<span class="hljs-attribute">conditionType</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The condition of the Vessel. Possible Values (steaming, anchor)"</span>
    </span>}</span>,
    "<span class="hljs-attribute">meHours</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Working Hours of the Main Engine"</span>
    </span>}</span>,
    "<span class="hljs-attribute">meCons</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Fuel Consumption of the Main Engine"</span>
    </span>}</span>,
    "<span class="hljs-attribute">auxHours</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Working Hours of the Auxiliary Engine"</span>
    </span>}</span>,
    "<span class="hljs-attribute">auxCons</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Fuel Consumption of the Auxiliary Engine"</span>
    </span>}</span>,
    "<span class="hljs-attribute">observedDistance</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Observation Distance of the Vessel"</span>
    </span>}</span>,
    "<span class="hljs-attribute">created_on</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Date Time Report received"</span>
    </span>}</span>,
    "<span class="hljs-attribute">vessel</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">imo</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the Vessel"</span>
        </span>}</span>,
        "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Unique email of the Vessel"</span>
        </span>}
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="reports-reports-collection-get-1" class="action get"><h4 class="action-heading"><div class="name">Get Specific Report</div><a href="#reports-reports-collection-get-1" class="method get">GET</a><code class="uri">/reports/{id}</code></h4><p>Get Specific Report data.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>The ID of the Report</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="users" class="resource-group"><h2 class="group-heading">Users <a href="#users" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="users-users-collection" class="resource"><h3 class="resource-heading">Users Collection <a href="#users-users-collection" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/users</span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">users</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">ip</span>": <span class="hljs-value"><span class="hljs-string">"127.1.1.1"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">users</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="users-users-collection-get" class="action get"><h4 class="action-heading"><div class="name">Get All Users</div><a href="#users-users-collection-get" class="method get">GET</a><code class="uri">/users</code></h4><p>Get all Users in Database.</p>
</div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/users/<span class="hljs-attribute" title="id">1</span></span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">ip</span>": <span class="hljs-value"><span class="hljs-string">"127.1.1.1"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the User"</span>
    </span>}</span>,
    "<span class="hljs-attribute">ip</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The IP of the User"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="users-users-collection-get-1" class="action get"><h4 class="action-heading"><div class="name">Get Specific User</div><a href="#users-users-collection-get-1" class="method get">GET</a><code class="uri">/users/{id}</code></h4><p>Get Specific User data.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>The ID of the User</p>
</dd></dl></div></div></div><hr class="split"><div class="right"><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname">http://manoloudis.gr</span>/users/<span class="hljs-attribute" title="id">1</span>/requests</span></div><div class="tabs"><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">429</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">ip</span>": <span class="hljs-value"><span class="hljs-string">"127.1.1.1"</span></span>,
  "<span class="hljs-attribute">requests</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">path</span>": <span class="hljs-value"><span class="hljs-string">"/reports"</span></span>,
      "<span class="hljs-attribute">body</span>": <span class="hljs-value"><span class="hljs-string">"{\"vessels\":[\"9327475\"],\"fuel_consumption\":{\"main\":{\"greater\":\"100\"}}}"</span></span>,
      "<span class="hljs-attribute">response</span>": <span class="hljs-value"><span class="hljs-string">"{\"headers\":{},\"original\":{\"id\":1,\"ip\":\"::1\"},\"exception\":null}"</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The ID of the User"</span>
    </span>}</span>,
    "<span class="hljs-attribute">ip</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The IP of the User"</span>
    </span>}</span>,
    "<span class="hljs-attribute">requests</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"array"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">plain/text</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>Requests per hour limit exceeded.</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div><div class="middle"><div id="users-users-collection-get-2" class="action get"><h4 class="action-heading"><div class="name">Get Specific User Requests</div><a href="#users-users-collection-get-2" class="method get">GET</a><code class="uri">/users/{id}/requests</code></h4><p>Get Specific User data with all User Requests.</p>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1</span></span><p>The ID of the User</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 10 Jan 2018</p></div></div></div></div><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>