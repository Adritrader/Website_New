<!DOCTYPE html>
<html>
<head>
	<!-- Author character set -->
		<meta charset="utf-8">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content= "width=device-width">

		<!-- Author Keywords -->
		<meta name="keywords" content= "web design, affordable web design, proffesional web design">

		<!-- Author Meta -->
		<meta name="author" content="VaporRick">

		<!-- Meta Description -->
		<meta name="description" content="">


		<!-- Site Title -->
		<title>VaporWeb Charts| Welcome</title>

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/newsite2.css">
</head>

<body>
	<header>
		<div class="header">
			<div id="branding">
				<h1><span class="highlight">Mr. Wagecuck</span>Charts</h1>
			</div>
		</div>
	</header>

	<!-- TradingView Widget Cinta de precios -->

		<div class="cintaprecios">
			<div class="tradingview-widget-container__widget"></div>
				<div class="tradingview-widget-copyright"><a href="https://es.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
					<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
						{
						"symbols": [
					    {
					      "description": "BTC/USD",
					      "proName": "BITMEX:XBTUSD"
					    },
					    {
					      "description": "ETH/USD",
					      "proName": "BITMEX:ETHUSD"
					    },
					    {
					      "description": "XRP/USD",
					      "proName": "BINANCE:XRPUSD"
					    },
					    {
					      "description": "LTC/USD",
					      "proName": "BINANCE:LTCUSD"
					    },
					    {
					      "description": "EOS/USDT",
					      "proName": "BINANCE:EOSUSDT"
					    },
					    {
					      "description": "BNB/USDT",
					      "proName": "BINANCE:BNBUSDT"
					    },
					    {
					      "description": "XLM/USD",
					      "proName": "BINANCE:XLMUSD"
					    },
					    {
					      "description": "TRX/USDT",
					      "proName": "BINANCE:TRXUSDT"
					    },
					    {
					      "description": "ADA/USDT",
					      "proName": "BINANCE:ADAUSDT"
					    },
					    {
					      "description": "XMR/USDT",
					      "proName": "BINANCE:XMRUSDT"
					    },
					    {
					      "description": "DASH/USDT",
					      "proName": "BINANCE:DASHUSDT"
					    },
					    {
					      "description": "IOTA/USDT",
					      "proName": "BINANCE:IOTAUSDT"
					    },
					    {
					      "description": "ATOM/USDT",
					      "proName": "BINANCE:ATOMUSDT"
					    },
					    {
					      "description": "ETC/USDT",
					      "proName": "BINANCE:ETCUSDT"
					    },
					    {
					      "description": "NEO/USDT",
					      "proName": "BINANCE:NEOUSDT"
					    },
					    {
					      "description": "XTZ/USDT",
					      "proName": "HITBTC:XTZUSDT"
					    },
					    {
					      "description": "ZEC/USDT",
					      "proName": "BINANCE:ZECUSDT"
					    },
					    {
					      "description": "QTUM/USDT",
					      "proName": "BINANCE:QTUMUSDT"
					    }
					  ],
					  "colorTheme": "dark",
					  "isTransparent": false,
					  "displayMode": "adaptive",
					  "locale": "en"
					}
					</script>
		</div>
		<div class="bannerlateral"></div>
		<div class="bannerlateral2"></div>

		<div class="container">
			<div class="chart">
				<div id="technical-analysis"></div>
					<div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"></a></div>
						<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
							<script type="text/javascript">
							new TradingView.widget(
							{
							"container_id": "technical-analysis",
							"width": 1350,
							"height": 700,
							"symbol": "XBTUSD",
							"interval": "",
							"timezone": "exchange",
							"theme": "Light",
							"style": "1",
							"toolbar_bg": "#502AF7",
							"withdateranges": true,
							"hide_side_toolbar": false,
							"allow_symbol_change": true,
							"save_image": true,
							"studies": [
							"ROC@tv-basicstudies",
							"StochasticRSI@tv-basicstudies",
							"MASimple@tv-basicstudies"
							],
							"show_popup_button": false,
							"locale": "en"
							});
							</script>

			</div>

			<iframe class="cryptopanic" width="100%" scrolling="no" allowtransparency="true" frameborder="0" src="https://cryptopanic.com/widgets/news/?bg_color=FFFFFF&amp;currencies=BTC%2CETH%2C&amp;font_family=sans&amp;font_size=15&amp;header_bg_color=FFFFFF&amp;header_text_color=000000&amp;link_color=0091C2&amp;news_feed=recent&amp;posts_limit=8&amp;text_color=333333&amp;title=Latest%20News" height="780px"></iframe>


			<a class="twitter-timeline" data-lang="en" data-width="257" data-height="670" href="https://twitter.com/Mr_Wagecuck?ref_src=twsrc%5Etfw">Tweets by Mr_Wagecuck</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

			<div class="cryptomk">
		  		<div class="tradingview-widget-container__widget"></div>
		  			<div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"></a></div>
		  			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
		  			{
					"width": 900,
					"height": 418,
					"defaultColumn": "overview",
					"screener_type": "crypto_mkt",
					"displayCurrency": "USD",
					"colorTheme": "light",
					"transparency": false,
					"locale": "en"
					}
		  			</script>
			</div>
			<div class="heatmap">
				<iframe src="https://coin360.com/widget/map.html" title="Coin360.com: Cryptocurrency Market State" width="1050" height="384"></iframe>
			</div>


		</div>


</body>
</html>