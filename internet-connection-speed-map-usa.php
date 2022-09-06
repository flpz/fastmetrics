<?php
$title="Internet Connection Speed Map: State vs State - Fastmetrics";
$desc="Our interactive map shows average peak speed of internet connections by state. Hover on your state, see what internet speed is available where you live.";
$h2="Average Peak Internet Connection Speed in USA States (Mbps)";
$h1="Internet Connection Speed Map: State vs State";
$share = "no";
$lazy = "yes";
$canonical="none";
$chat = "";
$banner="usa-map-satellite-view";
$banner_alt = 'satellite view map of usa at night showing lights of states, cities and towns';
$ad = "yes";
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid">
			<div class="container">
				<h3 class="text-center">Average Peak & Median Internet Speeds USA</h3>
				<p>This USA map shows average peak speed of Internet connections by each state. This is different to average Internet speed. <b>So why measure average peak internet speed?</b> Peak Internet speeds show the potential for Internet service connectivity in a specific state. Your own Internet connection via an <a href="https://www.fastmetrics.com/blog/speedtest-net/speedtest-results/">Internet speed test</a> may be above or below your state average. It's nice to know what is possible where you live, or do business.</p>
				<p>Hover over the state you live in, to see the average peak internet speed for each state. To see average speeds by state or how US internet stacks up against our close overseas neighbors, click on a link in the index to be taken to the relevant table. Note: data is sourced via Akamai in 2015. For more recent updates, click on the link 'Internet Speeds In America - 2020 Update' in the index below.</p>
				<div class="text-center">
					<p><strong>Index</strong></p>
					<ul style="text-align:left;">
						<li><a href="#peak-speeds-by-state">Peak Internet Connection Speeds by State: 3rd Quarter 2015 Update</a></li>
						<li><a href="#average-speeds-by-state">Average Internet Connection Speeds by State: 3rd Quarter 2015 Update</a></li>
						<li class="desktop-only"><a href="#average-speeds-by-country">Average Internet Connection Speeds: USA vs Americas: 3rd Quarter 2015 Update</a></li>
						<li style="background:yellow;display:inline-block;"><a href="#average-speeds-usa">Average Internet Speeds USA - 2020 Update</a></li>
					</ul>
				</div>
				<div class="divider20"></div>
				<!--<iframe class="desktop-only" src="https://vida.io/embed/a2yMXxibYgfpTLLgB" width="100%" height="650" seamless frameBorder="0" scrolling="no"></iframe>
				<img src="https://www.fastmetrics.com/assets/images/internet-speed-map.png" alt="Internet Connection Speed Map" width="633" height="403" class="mobile-only">-->
				<div id="usa-map"></div>
				<div class="divider20"></div>
				<p><strong>Embed this map on your page;</strong></p>
				<code><textarea style="width: 100%;height:90px;padding:20px;box-sizing:border-box;border:1px solid #ccc;background:#eee;color:#666;"><style>#usa-map{width:100%;height:800px;border:none;}@media screen and (max-width:678px){#usa-map{height:600px;}}@media screen and (max-width:420px){#usa-map{height:370px;}}</style><iframe id="usa-map" src="https://www.fastmetrics.com/internet-connection-speed-map-usa-map.php"></iframe></textarea></code>
				<div class="divider40"></div>
				<div class="row">
					<div class="col-sm-4">
						<table class="states">
							<thead>
								<tr>
									<th>State</th>
									<th>Avg. Peak Speed (Mbps)</th>
								</tr>
							</thead>
							<tbody>
								<tr><th>Delaware</th><td>75</td></tr>
								<tr><th>Virginia</th><td>74</td></tr>
								<tr><th>Dist. of Columbia</th><td>68</td></tr>
								<tr><th>Massachusetts</th><td>66</td></tr>
								<tr><th>Rhode Island</th><td>65</td></tr>
								<tr><th>North Dakota</th><td>62</td></tr>
								<tr><th>New York</th><td>60</td></tr>
								<tr><th>Utah</th><td>60</td></tr>
								<tr><th>New Jersey</th><td>59</td></tr>
								<tr><th>California</th><td>58</td></tr>
								<tr><th>Connecticut</th><td>58</td></tr>
								<tr><th>Maryland</th><td>58</td></tr>
								<tr><th>Washington</th><td>58</td></tr>
								<tr><th>Michigan</th><td>56</td></tr>
								<tr><th>Pennsylvania</th><td>56</td></tr>
								<tr><th>Oregon</th><td>54</td></tr>
								<tr><th>South Dakota</th><td>54</td></tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4">
						<table class="states">
							<thead>
								<tr>
									<th>State</th>
									<th>Avg. Peak Speed (Mbps)</th>
								</tr>
							</thead>
							<tbody>
								<tr><th>New Hampshire</th><td>53</td></tr>
								<tr><th>Wisconsin</th><td>53</td></tr>
								<tr><th>Florida</th><td>52</td></tr>
								<tr><th>Georgia</th><td>51</td></tr>
								<tr><th>Indiana</th><td>51</td></tr>
								<tr><th>Illinois</th><td>50</td></tr>
								<tr><th>Minnesota</th><td>50</td></tr>
								<tr><th>Missouri</th><td>49</td></tr>
								<tr><th>Nevada</th><td>49</td></tr>
								<tr><th>Tennessee</th><td>49</td></tr>
								<tr><th>Texas</th><td>49</td></tr>
								<tr><th>Alaska</th><td>48</td></tr>
								<tr><th>Colorado</th><td>48</td></tr>
								<tr><th>Vermont</th><td>48</td></tr>
								<tr><th>Arizona</th><td>46</td></tr>
								<tr><th>Nebraska</th><td>46</td></tr>
								<tr><th>North Carolina</th><td>45</td></tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-4">
						<table class="states">
							<thead>
								<tr>
									<th>State</th>
									<th>Avg. Peak Speed (Mbps)</th>
								</tr>
							</thead>
							<tbody>
								<tr><th>South Carolina</th><td>45</td></tr>
								<tr><th>Wyoming</th><td>45</td></tr>
								<tr><th>Alabama</th><td>44</td></tr>
								<tr><th>Hawaii</th><td>43</td></tr>
								<tr><th>Kansas</th><td>43</td></tr>
								<tr><th>Montana</th><td>43</td></tr>
								<tr><th>Ohio</th><td>43</td></tr>
								<tr><th>Oklahoma</th><td>43</td></tr>
								<tr><th>Iowa</th><td>42</td></tr>
								<tr><th>West Virginia</th><td>42</td></tr>
								<tr><th>Maine</th><td>40</td></tr>
								<tr><th>Louisiana</th><td>39</td></tr>
								<tr><th>Idaho</th><td>37</td></tr>
								<tr><th>Mississippi</th><td>37</td></tr>
								<tr><th>New Mexico</th><td>36</td></tr>
								<tr><th>Arkansas</th><td>35</td></tr>
								<tr><th>Kentucky</th><td>34</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container_fluid blue-bg white">
			<div class="container">
				<h4>How is peak internet speed measured?</h4>
				<p><a href="https://blogs.akamai.com/2015/02/state-of-the-internet-metrics-what-do-they-mean.html" target="_blank" class="white">Akamai states;</a> "to calculate this metric, an average is taken of only the highest connection speed calculated from each unique IP address determined to be in a specific country/region or U.S. state".</p>
				<div class="divider20"></div>
				<h4>What does average peak internet speed mean?</h4>
				<p>"The average peak connection speed is more representative of Internet connection capacity. By using the fastest measurement observed from each unique IP address, we are capturing just those connections that reached maximum throughput rates.</p>
				<p>Presenting an average mitigates the impact of the extremes - while there may be users <a href="https://www.fastmetrics.com/dedicated-ethernet" class="white">connecting at Gigabit speeds</a> in a given country, there will also be users connecting at dial-up, satellite, or DSL speeds" - Akamai.</p>
				<div class="divider20"></div>
				<h4>Is your internet connection well below the average peak?</h4>
				<p>This may be caused by a few things, especially for residential users:</p>
				<ul>
					<li>Geographic location / service availability (coverage).</li>
					<li>Faulty equipment or misconfigurations.</li>
					<li><a href="https://www.pingplotter.com/manual/scenariosaturatedpipe.html" target="_blank" class="white">Bandwidth saturation</a>.</li>
					<li>Current service. Copper based services such as DSL, aDSL and aDSL2+ are distance sensitive. Copper based internet service speeds degrade the further away from your local telephone exchange.</li>
					<li>Services such as WiFi (wireless) rely on coverage and signal strength via 'hot spots' and the presence of an antenna.</li>
					<li>Fiber internet is not distance sensitive and typically will exceed the speeds offered by copper based connections.</li>
				</ul>
				<div class="divider20"></div>
				<h4>To improve your internet connection speed, some things you could do are;</h4>
				<ul>
					<li>Contact your local internet service provider to see if there is a service upgrade available.</li>
					<li>Speak to tech support to see what they can do, or look up any guides from your local ISP on speed improvements.</li>
					<li>Check to see if there are bonded or <a href="https://www.fastmetrics.com/fiber-optic-internet-availability-map.php" class="white">fiber optic internet options available in your local area</a>.</li>
					<li>For WiFi, potentially upgrade your modem / router. More tips here on <a href="https://www.fastmetrics.com/blog/wifi/factors-affecting-wifi-performance/" target="_blank" class="white">how to boost your WiFi signal</a>.</li>
					<li>Most internet services in the USA are not symmetric. Upload and download speeds are not the same. Most connections offer more download speed. To increase speed, pause any uploads. More info here on <a href="http://www.speedtest.net/articles/how-to-get-faster-download-speed/" class="white">how to increase internet download speeds</a>.</li>
				</ul>
			</div>
		</div>
		
		<div class="container_fluid" id="peak-speeds-by-state">
			<div class="container">
				<h4 class="text-center">Peak Internet Connection Speeds by State: 3rd Quarter 2015 Update</h4> 
				<table class="states states-update">
					<thead>
						<tr>
							<th>State</th>
							<th>Q3 2015 Avg. Mbps</th>
							<th>QoQ change</th>
							<th>YoY change</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Delaware</th><td>86.6</td><td>31.0%</td><td>14%</td></tr>
						<tr><th>District of Columbia</th><td>80.2</td><td>10.0%</td><td>27%</td></tr>
						<tr><th>Massachusetts</th><td>75.8</td><td>18.0%</td><td>19%</td></tr>
						<tr><th>Utah</th><td>75.8</td><td>24%</td><td>27.0%</td></tr>
						<tr><th>Rhode Island</th><td>75.0</td><td>14.0%</td><td>27%</td></tr>
						<tr><th>Maryland</th><td>72.9</td><td>9.7%</td><td>28%</td></tr>
						<tr><th>Virginia</th><td>72.1</td><td>9.1%</td><td>17%</td></tr>
						<tr><th>New Jersey</th><td>71.5</td><td>9.9%</td><td>21%</td></tr>
						<tr><th>Washington</th><td>69.2</td><td>4.5%</td><td>10%</td></tr>
						<tr><th>New York</th><td>68.6</td><td>8.4%</td><td>23%</td></tr>
					</tbody>
				</table>
				<div class="divider20"></div>
			</div>
		</div>
		
		<div class="container_fluid no-top" id="average-speeds-by-state">
			<div class="container">
				<h4 class="text-center">Average Internet Connection Speeds by State: 3rd Quarter 2015 Update</h4> 
				<table class="states states-update">
					<thead>
						<tr>
							<th>State</th>
							<th>Q3 2015 Avg. Mbps</th>
							<th>QoQ change</th>
							<th>YoY change</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>District of Columbia</th><td>19.5</td><td>2.7%</td><td>34.0%</td></tr>
						<tr><th>Delaware</th><td>18.5</td><td>9.7%</td><td>6.3%</td></tr>
						<tr><th>Utah</th><td>16.2</td><td>6.4%</td><td>9.7%</td></tr>
						<tr><th>Massachusetts</th><td>16.2</td><td>5.5%</td><td>13.0%</td></tr>
						<tr><th>Rhode Island</th><td>15.7</td><td>3.4%</td><td>17.0%</td></tr>
						<tr><th>Washington</th><td>15.2</td><td>2.9%</td><td>-7.1%</td></tr>
						<tr><th>Maryland</th><td>15.0</td><td>3.2%</td><td>22.0%</td></tr>
						<tr><th>New Jersey</th><td>15.0</td><td>5.7%</td><td>20.0%</td></tr>
						<tr><th>Virginia</th><td>14.9</td><td>5.3%</td><td>2.8%</td></tr>
						<tr><th>New York</th><td>14.8</td><td>5.9%</td><td>20.0%</td></tr>
					</tbody>
				</table>
				<div class="divider20"></div>		
			</div>
		</div>
		
		<div class="container_fluid blue-bg white">
			<div class="container">
				<h4>Where does the internet speed data come from?</h4>
				<p>Our data comes from the latest <a href="https://www.stateoftheinternet.com/downloads/pdfs/Q3-2015-SOTI-Connectivity-Executive-Summary.pdf" target="_blank" class="white">Akamai State of the Internet report</a>. Internet speed measurements in the report are from requests to Akamai's platform. Over a quarter, they analyze between 100 to 200 trillion requests, from more than 200 countries globally.</p>
				<div class="desktop-only">
					<div class="divider20"></div>
					<h4>How is average internet connection speed measured?</h4>
					<p>Average internet speed by is calculated by taking an average of all of the connection speeds during the quarter, from unique IP addresses (IPv4) from specific U.S. states.</p>
				</div>
			</div>
		</div>
		
		<div class="container_fluid" id="average-speeds-by-country">
			<div class="container">
				<h4 class="text-center">Average Internet Connection Speeds: USA vs Americas: 3rd Quarter 2015</h4> 
				<table class="states states-america">
					<thead>
						<tr>
							<th>Country/Region</th>
							<th>Global Rank</th>
							<th>Q3 2015 Avg. Mbps</th>
							<th>QoQ change</th>
							<th>YoY change</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>United States</th><td>16</td><td>12.6</td><td>7.3%</td><td>9.4%</td></tr>
						<tr><th>Canada</th><td>21</td><td>11.9</td><td>5.3%</td><td>16.0%</td></tr>
						<tr><th>Uruguay</th><td>59</td><td>5.9</td><td>-0.4%</td><td>8.6%</td></tr>
						<tr><th>Chile</th><td>65</td><td>5.7</td><td>1.6%</td><td>40%</td></tr>
						<tr><th>Mexico</th><td>68</td><td>5.5</td><td>1.6%</td><td>34%</td></tr>
						<tr><th>Peru</th><td>80</td><td>4.4</td><td>-6.4%</td><td>23%</td></tr>
						<tr><th>Colombia</th><td>81</td><td>4.2</td><td>-6.1%</td><td>25%</td></tr>
						<tr><th>Argentina</th><td>83</td><td>4.2</td><td>-12%</td><td>-1.0%</td></tr>
						<tr><th>Ecuador</th><td>84</td><td>4.1</td><td>2.0%</td><td>13%</td></tr>
						<tr><th>Brazil</th><td>93</td><td>3.6</td><td>1.0%</td><td>24%</td></tr>
						<tr><th>Panama</th><td>96</td><td>3.5</td><td>6.5%</td><td>21%</td></tr>
						<tr><th>Costa Rica</th><td>99</td><td>3.2</td><td>0.9%</td><td>17%</td></tr>
						<tr><th>Bolivia</th><td>132</td><td>1.8</td><td>-8.4%</td><td>58%</td></tr>
						<tr><th>Paraguay</th><td>137</td><td>1.5</td><td>-1.9%</td><td>12%</td></tr>
						<tr><th>Venezuela</th><td>138</td><td>1.5</td><td>-9.1%</td><td>9.8%</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<p>To see how USA internet speeds compare against other countries all over the world, see our global map of average <a href="https://www.fastmetrics.com/internet-connection-speed-by-country.php">internet speeds by country</a>.</p>
				<div class="divider40"></div>
				<h4 id="average-speeds-usa" class="text-center">Average Internet Speeds USA - 2020 Update</h4>
				<p>The below USA Internet speed averages are sourced via <a target="_blank" href="https://www.measurementlab.net/blog/covid-19-response-dashboards/" rel="noreferrer noopener">M-Lab using NDT data</a>. Internet speed performance for each state is measured <strong>from December 30th 2019, through to June 7th 2020</strong>. Via the table below, see median download and upload Internet speeds for each USA state in Megabits Per Second (Mbps). Also the amount of sample tests used to reach the median. Hover over the map below the table, to see the average download speed for each USA state, an important metric, particularly for residential Internet service.</p>
				<div class="divider20"></div>
				<h4 class="text-center">Median Internet Speeds By USA States - 2020</h4>
				
				<table class="states states-2020">
					<thead>
						<tr>
							<th>USA State</th>
							<th>Median Download Speed (Mbps)</th>
							<th>Median Upload Speed (Mbps)</th>
							<th>Download Tests</th>
							<th>Upload Tests</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Delaware</th><td>59.48</td><td>11.34</td><td>274629</td><td>208126</td></tr>
						<tr><th>Rhode Island</th><td>55</td><td>11.24</td><td>200986</td><td>202959</td></tr>
						<tr><th>Massachusetts</th><td>52.21</td><td>9.46</td><td>2004774</td><td>2013450</td></tr>
						<tr><th>Maryland</th><td>50.54</td><td>10.89</td><td>1684991</td><td>1668806</td></tr>
						<tr><th>New Jersey</th><td>50.12</td><td>11.79</td><td>3023953</td><td>2696460</td></tr>
						<tr><th>New Hampshire</th><td>48.36</td><td>6.1</td><td>472870</td><td>455399</td></tr>
						<tr><th>Connecticut</th><td>46.26</td><td>9.05</td><td>1265930</td><td>1257177</td></tr>
						<tr><th>Florida</th><td>41.39</td><td>10.61</td><td>6253458</td><td>6325012</td></tr>
						<tr><th>New York</th><td>41.28</td><td>10.85</td><td>5919235</td><td>5713040</td></tr>
						<tr><th>Virginia</th><td>40.81</td><td>10.07</td><td>4157511</td><td>8131604</td></tr>
						<tr><th>Pennsylvania</th><td>39.61</td><td>8.22</td><td>2987131</td><td>2969929</td></tr>
						<tr><th>Colorado</th><td>38.14</td><td>5.63</td><td>2194384</td><td>2199961</td></tr>
						<tr><th>Texas</th><td>37.85</td><td>9.71</td><td>9176151</td><td>8992956</td></tr>
						<tr><th>California</th><td>37.51</td><td>7.55</td><td>19544842</td><td>19842392</td></tr>
						<tr><th>Nevada</th><td>36.48</td><td>9.02</td><td>801096</td><td>792985</td></tr>
						<tr><th>Arizona</th><td>35.93</td><td>7.33</td><td>2274347</td><td>2268794</td></tr>
						<tr><th>North Carolina</th><td>34.01</td><td>9.67</td><td>2774811</td><td>3303873</td></tr>
						<tr><th>North Dakota</th><td>33.96</td><td>9.46</td><td>98991</td><td>109817</td></tr>
						<tr><th>Washington</th><td>33.85</td><td>5.72</td><td>3015005</td><td>2913245</td></tr>
						<tr><th>Utah</th><td>33.46</td><td>5.79</td><td>1294341</td><td>1347494</td></tr>
						<tr><th>Illinois</th><td>32.89</td><td>7.76</td><td>4605237</td><td>4345703</td></tr>
						<tr><th>South Carolina</th><td>32.53</td><td>9.03</td><td>895237</td><td>867075</td></tr>
						<tr><th>Oregon</th><td>32.29</td><td>5.78</td><td>1428126</td><td>1393945</td></tr>
						<tr><th>Minnesota</th><td>31.33</td><td>5.8</td><td>1842761</td><td>1907065</td></tr>
						<tr><th>Georgia</th><td>30.4</td><td>8.49</td><td>2991497</td><td>2909601</td></tr>
						<tr><th>Michigan</th><td>29.88</td><td>7.16</td><td>2223281</td><td>2043449</td></tr>
						<tr><th>Indiana</th><td>28.71</td><td>8.54</td><td>1495967</td><td>1430981</td></tr>
						<tr><th>District of Columbia</th><td>28.54</td><td>5.91</td><td>331488</td><td>323623</td></tr>
						<tr><th>Louisiana</th><td>28.16</td><td>6.86</td><td>716270</td><td>736175</td></tr>
						<tr><th>Oklahoma</th><td>26.79</td><td>7.67</td><td>883271</td><td>890329</td></tr>
						<tr><th>Tennessee</th><td>26.64</td><td>9.27</td><td>1550001</td><td>1515796</td></tr>
						<tr><th>Nebraska</th><td>26.07</td><td>7.77</td><td>443991</td><td>466826</td></tr>
						<tr><th>Wisconsin</th><td>26.04</td><td>7.92</td><td>1612023</td><td>1589496</td></tr>
						<tr><th>Alabama</th><td>25.26</td><td>7.66</td><td>960262</td><td>852501</td></tr>
						<tr><th>Ohio</th><td>25.12</td><td>7.13</td><td>2940759</td><td>2861232</td></tr>
						<tr><th>South Dakota</th><td>25.07</td><td>8.91</td><td>131076</td><td>101967</td></tr>
						<tr><th>Kansas</th><td>24.21</td><td>8.15</td><td>577946</td><td>599942</td></tr>
						<tr><th>Montana</th><td>24.16</td><td>9.07</td><td>395120</td><td>403641</td></tr>
						<tr><th>Missouri</th><td>23.13</td><td>7.01</td><td>1510064</td><td>1447188</td></tr>
						<tr><th>Hawaii</th><td>21.56</td><td>7.51</td><td>231333</td><td>276628</td></tr>
						<tr><th>Iowa</th><td>21.25</td><td>8.85</td><td>789987</td><td>772751</td></tr>
						<tr><th>Maine</th><td>21.23</td><td>5.87</td><td>267610</td><td>282498</td></tr>
						<tr><th>Kentucky</th><td>20.43</td><td>6.5</td><td>845615</td><td>818945</td></tr>
						<tr><th>Arkansas</th><td>20.4</td><td>5.01</td><td>560612</td><td>539620</td></tr>
						<tr><th>Wyoming</td><td>20.31</th><td>4.56</td><td>140571</td><td>147579</td></tr>
						<tr><th>New Mexico</th><td>18.38</td><td>4.7</td><td>400697</td><td>409772</td></tr>
						<tr><th>West Virginia</th><td>17.08</td><td>5.23</td><td>303794</td><td>298287</td></tr>
						<tr><th>Idaho</th><td>16.83</td><td>4.19</td><td>546876</td><td>531352</td></tr>
						<tr><th>Vermont</th><td>16.69</td><td>4.86</td><td>167059</td><td>168221</td></tr>
						<tr><th>Mississippi</th><td>12.63</td><td>3.35</td><td>361150</td><td>354588</td></tr>
						<tr><th>Alaska</th><td>9.94</td><td>4.63</td><td>94375</td><td>103607</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<h4 class="text-center">Average Download Speeds By State Mapped</h4>
				<p style="margin:0;">Hover over each state to reveal the average (median) download speed. Download speed data collected from Dec 30th 2019, through to June 7th 2020. Color scale below the map, but basically; green = faster, red = slower speeds.</p>
				<div class="desktop-only">
					<div id="usa-map-updated"></div>
				</div>
			</div>
		</div>
		
		<!--<div class="container_fluid text-center mobile-no-top black-bg white desktop-only services">
			<div class="container">	
				<h4 class="text-center">Dedicated Business Services</h4>
				<div class="row">
					<div class="col-sm-3">
						<h4><a class="orange" href="fiber-optic-internet.php">Fiber Internet Service</a></h4>
						<ul>      				
							<li>○ Managed fiber connectivity</li>
							<li>○ Unlimited bandwidth</li>
							<li>○ Fiber to 10 Gbps symmetric</li>
							<li>○ Free install & setup</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="ethernet-over-copper.php">EoC Service</a></h4>
						<ul>      				
							<li>○ Faster install time</li>
							<li>○ Upgrade that legacy T1 line</li>
							<li>○ EoC speeds to 30 x 30 Mbps</li>
							<li>○ Free hardware & monitoring</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/dedicated-ethernet">Dedicated Ethernet</a></h4>
						<ul>      				
							<li>○ Point to point connectivity</li>
							<li>○ Scale your network, faster</li>
							<li>○ Direct cloud connections</li>
							<li>○ Local SF network support</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4><a class="orange" href="https://www.fastmetrics.com/metricvoice">metricVOICE</a></h4>
						<ul>      				
							<li>○ Free calls &amp; texts</li>
							<li>○ Free phones &amp; apps</li>
							<li>○ Add tools, apps &amp; CRMs</li>
							<li>○ Flat service fee - ALL features</li>
						</ul>
					</div>
				</div>
			</div>
		</div>-->
	
	</article>
</section>		
		
<?php include("inc/footer.php"); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['geochart']});
	google.charts.setOnLoadCallback(drawRegionsMap);
	google.charts.setOnLoadCallback(drawRegionsMapp);

	function drawRegionsMap() {
		var data = google.visualization.arrayToDataTable([
			['State', 'Average Internet Speed (Mbps)'],
			['Delaware', 75],
			['Virginia', 74],
			['Dist. of Columbia', 68],
			['Massachusetts', 66],
			['Rhode Island', 65],
			['North Dakota', 62],
			['New York', 60],
			['Utah', 60],
			['New Jersey', 59],
			['California', 58],
			['Connecticut', 58],
			['Maryland', 58],
			['Washington', 58],
			['Michigan', 56],
			['Pennsylvania', 56],
			['Oregon', 54],
			['South Dakota', 54],
			['New Hampshire', 53],
			['Wisconsin', 53],
			['Florida', 52],
			['Georgia', 51],
			['Indiana', 51],
			['Illinois', 50],
			['Minnesota', 50],
			['Missouri', 49],
			['Nevada', 49],
			['Tennessee', 49],
			['Texas', 49],
			['Alaska', 48],
			['Colorado', 48],
			['Vermont', 48],
			['Arizona', 46],
			['Nebraska', 46],
			['North Carolina', 45],
			['South Carolina', 45],
			['Wyoming', 45],
			['Alabama', 44],
			['Hawaii', 43],
			['Kansas', 43],
			['Montana', 43],
			['Ohio', 43],
			['Oklahoma', 43],
			['Iowa', 42],
			['West Virginia', 42],
			['Maine', 40],
			['Louisiana', 39],
			['Idaho', 37],
			['Mississippi', 37],
			['New Mexico', 36],
			['Arkansas', 35],
			['Kentucky', 34]
		]);
		
		var options = {};
        options['region'] = 'US';
		options['resolution'] = 'provinces';
        options['colors'] = ['#ff0000', '#ffff1a', '#77b300'];
	  
		var chart = new google.visualization.GeoChart(document.getElementById('usa-map'));
		chart.draw(data, options);
	}
	
	function drawRegionsMapp() {
		var data = google.visualization.arrayToDataTable([
			['State', 'Average Download Speed (Mbps)'],
			['Delaware', 59.48],
			['Rhode Island', 55],
			['Massachusetts', 52.21],
			['Maryland', 50.54],
			['New Jersey', 50.12],
			['New Hampshire', 48.36],
			['Connecticut', 46.26],
			['Florida', 41.39],
			['New York', 41.28],
			['Virginia', 40.81],
			['Pennsylvania', 39.61],
			['Colorado', 38.14],
			['Texas', 37.85],
			['California', 37.51],
			['Nevada', 36.48],
			['Arizona', 35.9],
			['North Carolina', 34.01],
			['North Dakota', 33.96],
			['Washington', 33.85],
			['Utah', 33.46],
			['Illinois', 32.89],
			['South Carolina', 32.53],
			['Oregon', 32.29],
			['Minnesota', 31.33],
			['Georgia', 30.4],
			['Michigan', 29.88],
			['Indiana', 28.71],
			['District of Columbia', 28.54],
			['Louisiana', 28.16],
			['Oklahoma', 26.79],
			['Tennessee', 26.64],
			['Nebraska', 26.07],
			['Wisconsin', 26.04],
			['Alabama', 25.26],
			['Ohio', 25.12],
			['South Dakota', 25.07],
			['Kansas', 24.21],
			['Montana', 24.16],
			['Missouri', 23.13],
			['Hawaii', 21.56],
			['Iowa', 21.25],
			['Maine', 21.23],
			['Kentucky', 20.43],
			['Arkansas', 20.4],
			['Wyoming', 20.31],
			['New Mexico', 18.38],
			['West Virginia', 17.08],
			['Idaho', 16.83],
			['Vermont', 16.69],
			['Mississippi', 12.63],
			['Alaska', 9.94]
		]);
		
		var options = {};
        options['region'] = 'US';
		options['resolution'] = 'provinces';
        options['colors'] = ['#ff0000', '#ffff1a', '#77b300'];
	  
		var chart = new google.visualization.GeoChart(document.getElementById('usa-map-updated'));
		chart.draw(data, options);
	}
</script>

<style>
	table.states tbody td,table.states thead th{text-align:right;}
	table.states thead th:first-of-type{text-align:left;}
	@media screen and (max-width:992px){
		table.states tbody td,table.states thead th,table.states thead th:first-of-type{text-align:center;}
		table.states td:nth-of-type(1):before{content:"Avg. Peak Speed (Mbps)";}
		table.states-update td:nth-of-type(1):before{content:"Q3 2015 Avg. Mbps";}
		table.states-update td:nth-of-type(2):before{content:"QoQ change";}
		table.states-update td:nth-of-type(3):before{content:"YoY change";}
		table.states-america td:nth-of-type(1):before{content:"Global Rank";}
		table.states-america td:nth-of-type(2):before{content:"Q3 2015 Avg. Mbps";}
		table.states-america td:nth-of-type(3):before{content:"QoQ change";}
		table.states-america td:nth-of-type(4):before{content:"YoY change";}
		table.states-2020 td:nth-of-type(1):before{content:"Median Download Speed (Mbps)";}
		table.states-2020 td:nth-of-type(2):before{content:"Median Upload Speed (Mbps)";}
		table.states-2020 td:nth-of-type(3):before{content:"Download Tests";}
		table.states-2020 td:nth-of-type(4):before{content:"Upload Tests";}
	}
</style>
	
</body>
</html>