<?php
$title="Internet Speeds by Country - Fastest Internet In The World Map";
$desc="Our tables and map visualize average internet speeds of more than 200 countries. Find the fastest internet speed in the world with a single click.";
$h2="Find Fastest Internet Speeds by Country / Region";
$h1="Internet Speeds by Country (Mbps)";
$share = "";
$chat = "";
$prefooter = "no";
$lazy="yes";
$canonical="none";
$banner="world-map-satellite-view";
$banner_alt = 'world map of countries from satellite view at night time showing city lights';
include("inc/header.php");
?>

<section>
	<article>
	
		<div class="container_fluid mtop">
			<div class="container">
				<h3 class="text-center">Average Internet Speeds By Country</h3>
				<p>This interactive global map shows average internet speeds by country. Hover over a country to reveal the average internet speed. Click on a link in the index to see top 10 fastest internet speeds by average, for specific global regions.</p>
				<p style="margin:0 0 10px;"><strong>How is average internet speed for each country measured?</strong></p>
				<p>Speeds are measured in Megabits Per Second (Mbps) and map data is sourced from the Q4 2015 <a href="https://www.stateoftheinternet.com/" target="_blank">State of the Internet Report</a>. Analysis from more than 200 trillion requests to the Akamai CDN platform, from 149 countries worldwide. Business and residential internet connection speeds included, from unique IPs. Mobile network speeds excluded.</p>
				<div class="text-center">
					<p style="margin:0 0 10px;"><strong>For more recent average internet speed updates, jump to the latest internet speed by country data:</strong></p>
					<ul class="text-left" style="display:inline-block;">
						<li><a href="#median-internet-speeds-2020" style="background:#ffff33;">Median Internet Speeds by Country - 2020</a></li>
						<li><a href="#top-10-comparison-2018">Top 50 Average Internet Speeds June 2017 - May 2018</a></li>
						<li><a href="#top-10-comparison-2017">Top 10 Average Internet Speeds - Q1 2017</a></li>
						<li><a href="#top-10-comparison">Top 10 Average Internet Speeds - Q3 2016</a></li>
					</ul>
				</div>
				<p><strong>IMPORTANT: Internet speeds in each country are AVERAGE speeds. NOT the fastest internet speeds available.</strong> For insight into countries with the 'best' or fastest internet speeds, data shows the % of <a href="https://www.fastmetrics.com/blog/internet-services/speedtest-results/">internet speed tests</a> above certain thresholds. The % of connections above 4Mbps, 10Mbps and 15Mbps for each country indicates which country has overall higher internet speeds, over a larger sample of tests. For example, as of 2015, 80.5% of internet connection speed tests averaged <a href="#top-10-asia-pacific">above 10Mbps in South Korea</a>. Likewise for nearby average internet speeds in Japan. At that time, Japan's internet speed test data shows 62.8% of Japanese internet users connected to average speeds higher than 10Mbps. (In the USA at that time, only <a href="#top-10-america">52.9% of USA internet users</a> tested above an average internet speed of 10Mbps).</p>
				<p>Individual Internet Service Providers in each country, may provide slower or <a href="https://www.fastmetrics.com/fiber-optic-internet.php">faster internet speeds</a> in certain areas. Internet speeds received by end users are also based on other factors, like the type of internet connection available. An average is a good indication of where an individual country's internet speed performance is at, in our opinion.</p>
				<p style="margin:0 0 10px;"><strong>Index</strong></p>
				<div class="row">
					<div class="col-sm-8">
						<ul>
							<li><a href="#top-10-worldwide">Top 10 Worldwide Average Internet Speeds</a></li>
							<li><a href="#top-10-comparison-2017">Top 10 Average Internet Speeds - Q1 2017</a></li>
							<li><a href="#top-10-comparison">Top 10 Average Internet Speeds - Q3 2016</a></li>
							<li><a href="#top-10-asia-pacific">Top 10 Average Internet Speeds: Asia Pacific Countries</a></li>
							<li><a href="#top-10-america">Top 10 Average Internet Speeds: North / Central / South American Countries</a></li>
							<li><a href="#top-10-europe-africa">Top 10 Average Internet Speeds: European, Middle Eastern & African Countries</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul>
							<li><a href="#average-speed-internet">What is the average speed of internet?</a></li>
							<li><a href="#country-with-fastest-internet-speed">What country has the fastest internet speed?</a></li>
							<li><a href="#fastest-internet-in-the-world">Where is the fastest internet in the world?</a></li>
							<li><a href="#average-internet-speeds-usa">Average internet speeds in USA</a></li>
						</ul>
					</div>
				</div>
				<div id="countries-map"></div>
				<div class="divider20"></div>
				<p class="text-center"><strong>Embed this map on your page;</strong></p>
				<code><textarea style="width: 100%;height:90px;padding:20px;box-sizing:border-box;border:1px solid #ccc;background:#eee;color:#666;"><style>#internet-speed-map{width:100%;height:800px;border:none;}@media screen and (max-width:678px){#internet-speed-map{height:600px;}}@media screen and (max-width:420px){#internet-speed-map{height:370px;}}</style><iframe id="internet-speed-map" src="https://www.fastmetrics.com/internet-connection-speed-by-country-map.php"></iframe></textarea></code>
				<div class="divider20"></div>
				<p class="text-center">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-2924661314882202" data-ad-slot="6852497125"></ins>
					<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				</p>
			</div>
		</div>
		
		<div class="container_fluid no-top" id="median-internet-speeds-2020">
			<div class="container">
				<h3 class="text-center" style="background:#ffff33;">Median &amp; Fastest Internet Speeds By Country - August 2020</h3>
				<p>Here is our 2020 update on the fastest Internet in the world by country. Speed test data is collected by M-Lab and their Network Diagnostic Tool (<a href="https://www.measurementlab.net/tests/ndt/" target="_blank" rel="noopener noreferrer">NDT</a>). <a href="https://www.measurementlab.net/" target="_blank" rel="noopener noreferrer">M-Lab</a> is the source we will be using moving forward, for all Internet speed data and analysis. M-Lab measures <strong>median</strong> download and upload speeds for 192 countries, on a weekly basis. Internet speed by country data current as of <strong>August 30th 2020</strong>. Countries below are ranked by median download speeds, at time of testing. Important: download speeds are one part of <a href="https://www.fastmetrics.com/blog/speedtest-net/speedtest-results/">Internet speed tests</a>. Upload speed is also important when ranking countries with the fastest Internet speed.</p>
				
				<!--
				<p>Notably, when comparing with previous results, there are less Asian countries ranking highly for median Internet speeds in 2020. (Hong Kong an exception, ranking 2nd for median Internet speeds overall). However, previous leaders such as South Korea, Japan and Taiwan have dropped off. (USA now ranks 13th worldwide, passing South Korea). Scandinavian countries feature prominently for high speed downloads and upload speeds, with four countries making the top 10; Denmark - #2, Sweden - #6, Iceland - #7, Finland - #8, Norway - #12. All with a good sample size of tests, except Iceland. Many newer, smaller and less populated countries also feature. It should be noted that sample test numbers in these countries are also lower.</p>
				<p>Also, a new world leader in median download speeds - Liechtenstein! Do note this was measured over a smaller testing sample, compared to other countries in the top 10. However, the median download speeds in Liechtenstein of 199.28 Mbps, are nearly double that of second placed Hong Kong. However, upload speeds in Hong Kong are much faster, coming in at 91.4 Mbps.</p>
				-->
				<div class="divider20"></div>
				<h4 class="text-center">Fastest Internet In The World 2020 - Ranked By Median Download Speeds</h4>
				<table class="states countries-2020">
					<thead>
						<tr>
							<th>Rank</th>
							<th>Country</th>
							<th>Download Speed (Mbps)</th>
							<th>Upload Speed (Mbps)</th>
							<th># Download Tests</th>
							<th># Upload Tests</th>
							<th>No. <a class="white" href="https://www.fastmetrics.com/ip/">IPs</th>
						</tr>
					</thead>
					<tbody>
						<tr><td>1</td><th>Liechtenstein</th><td>199.28</th><td>39.78</td><td>96</td><td>98</td><td>10</td></tr>
						<tr><td>2</td><th>Hong Kong</th><td>112.32</th><td>91.40</td><td>4782</td><td>5589</td><td>933</td></tr>
						<tr><td>3</td><th>Denmark</th><td>107.78</th><td>66.02</td><td>21495</td><td>22217</td><td>912</td></tr>
						<tr><td>4</td><th>Switzerland</th><td>93.60</th><td>41.44</td><td>65614</td><td>74350</td><td>1907</td></tr>
						<tr><td>5</td><th>Netherlands</th><td>93.48</th><td>27.58</td><td>89478</td><td>93970</td><td>9044</td></tr>
						<tr><td>6</td><th>Sweden</th><td>91.36</th><td>86.04</td><td>20812</td><td>23875</td><td>2071</td></tr>
						<tr><td>7</td><th>Iceland</th><td>80.19</th><td>24.30</td><td>314</td><td>435</td><td>55</td></tr>
						<tr><td>8</td><th>Finland</th><td>79.40</th><td>18.39</td><td>9487</td><td>10395</td><td>526</td></tr>
						<tr><td>9</td><th>Andorra</th><td>76.67</th><td>56.20</td><td>159</td><td>176</td><td>33</td></tr>
						<tr><td>10</td><th>Bermuda</th><td>74.21</th><td>19.27</td><td>589</td><td>631</td><td>46</td></tr>
						<tr><td>11</td><th>San Marino</th><td>61.89</th><td>9.76</td><td>4</td><td>3</td><td>3</td></tr>
						<tr><td>12</td><th>Norway</th><td>58.95</td><td>49.73</td><td>13841</td><td>14298</td><td>2083</td></tr>
						<tr><td>13</td><th>United States</th><td>54.99</td><td>10.45</td><td>1972335</td><td>2126398</td><td>364898</td></tr>
						<tr><td>14</td><th>New Zealand</th><td>52.86</td><td>19.85</td><td>21053</td><td>21533</td><td>3518</td></tr>
						<tr><td>15</td><th>South Korea</th><td>44.42</td><td>41.96</td><td>5215</td><td>5393</td><td>413</td></tr>
						<tr><td>16</td><th>Belgium</th><td>41.68</td><td>12.47</td><td>42931</td><td>43810</td><td>6537</td></tr>
						<tr><td>17</td><th>Hungary</th><td>39.85</td><td>15.35</td><td>3512</td><td>3439</td><td>903</td></tr>
						<tr><td>18</td><th>Germany</th><td>37.50</td><td>9.78</td><td>144229</td><td>142519</td><td>56429</td></tr>
						<tr><td>19</td><th>Barbados</th><td>34.98</td><td>17.07</td><td>352</td><td>420</td><td>110</td></tr>
						<tr><td>20</td><th>Saint Pierre and Miquelon</th><td>34.40</td><td>4.48</td><td>13</td><td>10</td><td>1</td></tr>
						<tr><td>21</td><th>Luxembourg</th><td>34.12</td><td>10.45</td><td>298</td><td>305</td><td>72</td></tr>
						<tr><td>22</td><th>Australia</th><td>32.26</td><td>10.69</td><td>95073</td><td>99997</td><td>30367</td></tr>
						<tr><td>23</td><th>Bahrain</th><td>32.05</td><td>17.64</td><td>533</td><td>463</td><td>273</td></tr>
						<tr><td>24</td><th>Austria</th><td>31.70</td><td>9.43</td><td>19126</td><td>18000</td><td>5139</td></tr>
						<tr><td>25</td><th>Japan</th><td>31.23</td><td>44.60</td><td>83445</td><td>82208</td><td>38954</td></tr>
						<tr><td>26</td><th>Taiwan</th><td>30.58</td><td>18.14</td><td>9999</td><td>19865</td><td>753</td></tr>
						<tr><td>27</td><th>Romania</th><td>28.55</td><td>25.62</td><td>2418</td><td>2682</td><td>989</td></tr>
						<tr><td>28</td><th>United Kingdom</th><td>28.51</td><td>8.87</td><td>296494</td><td>316680</td><td>65332</td></tr>
						<tr><td>29</td><th>Spain</th><td>28.50</td><td>25.92</td><td>76757</td><td>82229</td><td>29253</td></tr>
						<tr><td>30</td><th>Republic of Lithuania</th><td>27.47</td><td>16.99</td><td>782</td><td>721</td><td>232</td></tr>
						<tr><td>31</td><th>Poland</th><td>25.77</td><td>10.06</td><td>6022</td><td>6468</td><td>1608</td></tr>
						<tr><td>32</td><th>Bahamas</th><td>25.07</td><td>6.86</td><td>372</td><td>363</td><td>111</td></tr>
						<tr><td>33</td><th>Canada</th><td>23.66</td><td>8.82</td><td>142597</td><td>144837</td><td>30905</td></tr>
						<tr><td>34</td><th>Latvia</th><td>23.28</td><td>18.39</td><td>519</td><td>1098</td><td>185</td></tr>
						<tr><td>35</td><th>Saint Lucia</th><td>21.44</td><td>5.55</td><td>44</td><td>46</td><td>37</td></tr>
						<tr><td>36</td><th>Greenland</th><td>21.43</td><td>85.61</td><td>59</td><td>62</td><td>10</td></tr>
						<tr><td>37</td><th>Ireland</th><td>21.27</td><td>10.47</td><td>21742</td><td>20990</td><td>7491</td></tr>
						<tr><td>38</td><th>Israel</th><td>20.19</td><td>3.13</td><td>4257</td><td>4636</td><td>833</td></tr>
						<tr><td>39</td><th>Slovakia</th><td>19.95</td><td>9.55</td><td>2443</td><td>2574</td><td>493</td></tr>
						<tr><td>40</td><th>Czechia</th><td>19.04</td><td>6.63</td><td>20694</td><td>29905</td><td>2635</td></tr>
						<tr><td>41</td><th>Bulgaria</th><td>18.86</td><td>12.39</td><td>1534</td><td>1479</td><td>478</td></tr>
						<tr><td>42</td><th>Belize</th><td>18.08</td><td>12.95</td><td>227</td><td>248</td><td>112</td></tr>
						<tr><td>43</td><th>Papua New Guinea</th><td>17.61</td><td>1.57</td><td>11</td><td>11</td><td>11</td></tr>
						<tr><td>44</td><th>Portugal</th><td>17.27</td><td>10.46</td><td>13317</td><td>14626</td><td>6238</td></tr>
						<tr><td>45</td><th>New Caledonia</th><td>17.07</td><td>10.60</td><td>111</td><td>146</td><td>39</td></tr>
						<tr><td>46</td><th>Estonia</th><td>16.83</td><td>22.75</td><td>694</td><td>754</td><td>145</td></tr>
						<tr><td>47</td><th>Vietnam</th><td>16.39</td><td>19.21</td><td>8144</td><td>8716</td><td>6118</td></tr>
						<tr><td>48</td><th>Serbia</th><td>15.21</td><td>4.42</td><td>6155</td><td>6230</td><td>3940</td></tr>
						<tr><td>49</td><th>Thailand</th><td>14.90</td><td>15.01</td><td>14186</td><td>16359</td><td>10329</td></tr>
						<tr><td>50</td><th>Qatar</th><td>14.27</td><td>8.83</td><td>848</td><td>1639</td><td>759</td></tr>
						<tr><td>51</td><th>Italy</th><td>14.17</td><td>6.26</td><td>95366</td><td>93685</td><td>34834</td></tr>
						<tr><td>52</td><th>Lesotho</th><td>14.09</td><td>4.62</td><td>14</td><td>13</td><td>7</td></tr>
						<tr><td>53</td><th>U.S. Virgin Islands</th><td>13.86</td><td>4.90</td><td>152</td><td>142</td><td>43</td></tr>
						<tr><td>54</td><th>Cyprus</th><td>12.92</td><td>4.97</td><td>1779</td><td>1856</td><td>541</td></tr>
						<tr><td>55</td><th>Antigua and Barbuda</th><td>12.70</td><td>22.13</td><td>30</td><td>33</td><td>15</td></tr>
						<tr><td>56</td><th>Trinidad and Tobago</th><td>12.28</td><td>7.02</td><td>500</td><td>600</td><td>267</td></tr>
						<tr><td>57</td><th>Slovenia</th><td>12.21</td><td>8.98</td><td>971</td><td>977</td><td>258</td></tr>
						<tr><td>58</td><th>France</th><td>12.10</td><td>2.89</td><td>46524</td><td>52697</td><td>18786</td></tr>
						<tr><td>59</td><th>Ukraine</th><td>11.21</td><td>11.59</td><td>5070</td><td>5783</td><td>3026</td></tr>
						<tr><td>60</td><th>Greece</th><td>10.88</td><td>1.50</td><td>7335</td><td>7652</td><td>2881</td></tr>
						<tr><td>61</td><th>Malaysia</th><td>10.82</td><td>10.96</td><td>4279</td><td>4994</td><td>2617</td></tr>
						<tr><td>62</td><th>Brunei</th><td>10.69</td><td>3.04</td><td>216</td><td>259</td><td>178</td></tr>
						<tr><td>63</td><th>Croatia</th><td>10.34</td><td>3.06</td><td>1703</td><td>2015</td><td>944</td></tr>
						<tr><td>64</td><th>Saint Vincent and the Grenadines</th><td>9.35</td><td>4.35</td><td>42</td><td>49</td><td>24</td></tr>
						<tr><td>65</td><th>Cabo Verde</th><td>9.03</td><td>1.36</td><td>17</td><td>19</td><td>16</td></tr>
						<tr><td>66</td><th>Republic of Moldova</th><td>8.90</td><td>7.14</td><td>508</td><td>609</td><td>338</td></tr>
						<tr><td>67</td><th>Malta</th><td>8.54</td><td>9.58</td><td>480</td><td>485</td><td>119</td></tr>
						<tr><td>68</td><th>Georgia</th><td>8.10</td><td>7.16</td><td>193</td><td>230</td><td>169</td></tr>
						<tr><td>69</td><th>Russia</th><td>8.06</td><td>8.83</td><td>18427</td><td>22181</td><td>9176</td></tr>
						<tr><td>70</td><th>Uruguay</th><td>8.05</td><td>6.91</td><td>1002</td><td>1114</td><td>852</td></tr>
						<tr><td>71</td><th>Costa Rica</th><td>8.04</td><td>2.30</td><td>3819</td><td>3991</td><td>1967</td></tr>
						<tr><td>72</td><th>Bosnia and Herzegovina</th><td>8.03</td><td>1.50</td><td>937</td><td>1219</td><td>840</td></tr>
						<tr><td>73</td><th>Panama</th><td>7.69</td><td>5.07</td><td>2232</td><td>2706</td><td>904</td></tr>
						<tr><td>74</td><th>Mexico</th><td>7.55</td><td>1.90</td><td>102970</td><td>104889</td><td>47864</td></tr>
						<tr><td>75</td><th>Grenada</th><td>7.47</td><td>2.11</td><td>82</td><td>87</td><td>20</td></tr>
						<tr><td>76</td><th>Montenegro</th><td>7.22</td><td>2.93</td><td>309</td><td>426</td><td>278</td></tr>
						<tr><td>77</td><th>North Macedonia</th><td>7.17</td><td>0.88</td><td>235</td><td>318</td><td>242</td></tr>
						<tr><td>78</td><th>Solomon Islands</th><td>7.09</td><td>3.61</td><td>7</td><td>7</td><td>6</td></tr>
						<tr><td>79</td><th>United Arab Emirates</th><td>6.76</td><td>6.01</td><td>3808</td><td>6077</td><td>2716</td></tr>
						<tr><td>80</td><th>Albania</th><td>6.27</td><td>2.22</td><td>528</td><td>856</td><td>582</td></tr>
						<tr><td>81</td><th>Chile</th><td>6.24</td><td>4.21</td><td>3536</td><td>5075</td><td>2419</td></tr>
						<tr><td>82</td><th>Jamaica</th><td>5.94</td><td>1.88</td><td>733</td><td>808</td><td>450</td></tr>
						<tr><td>83</td><th>Dominica</th><td>5.68</td><td>8.00</td><td>9</td><td>12</td><td>9</td></tr>
						<tr><td>84</td><th>Turkey</th><td>5.22</td><td>0.66</td><td>9915</td><td>11150</td><td>7272</td></tr>
						<tr><td>85</td><th>Saudi Arabia</th><td>5.13</td><td>2.95</td><td>8083</td><td>10995</td><td>6021</td></tr>
						<tr><td>86</td><th>El Salvador</th><td>4.93</td><td>1.27</td><td>4585</td><td>4455</td><td>1970</td></tr>
						<tr><td>87</td><th>Sri Lanka</th><td>4.91</td><td>2.13</td><td>304</td><td>465</td><td>329</td></tr>
						<tr><td>88</td><th>Egypt</th><td>4.89</td><td>0.73</td><td>21838</td><td>23380</td><td>18998</td></tr>
						<tr><td>89</td><th>Northern Mariana Islands</th><td>4.88</td><td>2.53</td><td>37</td><td>33</td><td>18</td></tr>
						<tr><td>90</td><th>Hashemite Kingdom of Jordan</th><td>4.86</td><td>1.25</td><td>1291</td><td>1407</td><td>997</td></tr>
						<tr><td>91</td><th>American Samoa</th><td>4.85</td><td>2.00</td><td>12</td><td>16</td><td>11</td></tr>
						<tr><td>92</td><th>Brazil</th><td>4.80</td><td>3.92</td><td>265193</td><td>282153</td><td>159684</td></tr>
						<tr><td>93</td><th>Cameroon</th><td>4.67</td><td>2.84</td><td>128</td><td>189</td><td>104</td></tr>
						<tr><td>94</td><th>Bolivia</th><td>4.60</td><td>3.71</td><td>7754</td><td>8269</td><td>4084</td></tr>
						<tr><td>95</td><th>Myanmar</th><td>4.40</td><td>5.22</td><td>1196</td><td>1537</td><td>987</td></tr>
						<tr><td>96</td><th>Belarus</th><td>4.37</td><td>2.70</td><td>1340</td><td>1628</td><td>827</td></tr>
						<tr><td>97</td><th>St Kitts and Nevis</th><td>4.36</td><td>1.21</td><td>95</td><td>73</td><td>22</td></tr>
						<tr><td>98</td><th>Liberia</th><td>4.23</td><td>2.70</td><td>18</td><td>30</td><td>10</td></tr>
						<tr><td>99</td><th>India</th><td>4.09</td><td>2.69</td><td>414725</td><td>399945</td><td>227100</td></tr>
						<tr><td>100</td><th>Guatemala</th><td>3.78</td><td>1.76</td><td>8885</td><td>8766</td><td>2799</td></tr>
						<tr><td>101</td><th>South Africa</th><td>3.70</td><td>2.27</td><td>40879</td><td>39240</td><td>16373</td></tr>
						<tr><td>102</td><th>Morocco</th><td>3.64</td><td>0.52</td><td>23932</td><td>22783</td><td>16169</td></tr>
						<tr><td>103</td><th>Nicaragua</th><td>3.64</td><td>0.93</td><td>2431</td><td>2415</td><td>1101</td></tr>
						<tr><td>104</td><th>Tunisia</th><td>3.58</td><td>0.71</td><td>2988</td><td>2937</td><td>2076</td></tr>
						<tr><td>105</td><th>Ecuador</th><td>3.57</td><td>3.98</td><td>22487</td><td>22953</td><td>11416</td></tr>
						<tr><td>106</td><th>Kuwait</th><td>3.48</td><td>1.26</td><td>868</td><td>1574</td><td>526</td></tr>
						<tr><td>107</td><th>Colombia</th><td>3.38</td><td>1.78</td><td>38424</td><td>40391</td><td>19828</td></tr>
						<tr><td>108</td><th>Iraq</th><td>3.19</td><td>2.63</td><td>7801</td><td>8160</td><td>5384</td></tr>
						<tr><td>109</td><th>Eswatini</th><td>2.93</td><td>0.97</td><td>83</td><td>93</td><td>57</td></tr>
						<tr><td>110</td><th>Dominican Republic</th><td>2.92</td><td>0.88</td><td>5106</td><td>5318</td><td>3526</td></tr>
						<tr><td>111</td><th>Oman</th><td>2.85</td><td>0.67</td><td>1870</td><td>2173</td><td>1161</td></tr>
						<tr><td>112</td><th>Burkina Faso</th><td>2.80</td><td>1.02</td><td>95</td><td>116</td><td>69</td></tr>
						<tr><td>113</td><th>Iran</th><td>2.74</td><td>0.60</td><td>6</td><td>7</td><td>7</td></tr>
						<tr><td>114</td><th>Peru</th><td>2.68</td><td>1.99</td><td>15016</td><td>16829</td><td>8461</td></tr>
						<tr><td>115</td><th>Honduras</th><td>2.64</td><td>2.17</td><td>3510</td><td>3661</td><td>1789</td></tr>
						<tr><td>116</td><th>Palestine</th><td>2.32</td><td>0.55</td><td>881</td><td>849</td><td>635</td></tr>
						<tr><td>117</td><th>Palau</th><td>2.28</td><td>0.50</td><td>4</td><td>5</td><td>4</td></tr>
						<tr><td>118</td><th>Kyrgyzstan</th><td>2.24</td><td>1.04</td><td>138</td><td>184</td><td>139</td></tr>
						<tr><td>119</td><th>Uganda</th><td>2.14</td><td>2.04</td><td>572</td><td>587</td><td>311</td></tr>
						<tr><td>120</td><th>Kenya</th><td>2.10</td><td>1.97</td><td>9199</td><td>9110</td><td>3243</td></tr>
						<tr><td>121</td><th>Philippines</th><td>2.05</td><td>2.31</td><td>166009</td><td>158522</td><td>59370</td></tr>
						<tr><td>122</td><th>Cuba</th><td>2.01</td><td>0.20</td><td>2</td><td>2</td><td>2</td></tr>
						<tr><td>123</td><th>Laos</th><td>1.99</td><td>1.93</td><td>47</td><td>57</td><td>43</td></tr>
						<tr><td>124</td><th>Mongolia</th><td>1.98</td><td>1.82</td><td>71</td><td>76</td><td>42</td></tr>
						<tr><td>125</td><th>Vanuatu</th><td>1.94</td><td>2.05</td><td>41</td><td>41</td><td>4</td></tr>
						<tr><td>126</td><th>French Polynesia</th><td>1.92</td><td>0.48</td><td>163</td><td>168</td><td>105</td></tr>
						<tr><td>127</td><th>Indonesia</th><td>1.88</td><td>1.82</td><td>91028</td><td>93531</td><td>54667</td></tr>
						<tr><td>128</td><th>Zimbabwe</th><td>1.85</td><td>0.61</td><td>311</td><td>372</td><td>229</td></tr>
						<tr><td>129</td><th>Mozambique</th><td>1.85</td><td>1.51</td><td>270</td><td>277</td><td>171</td></tr>
						<tr><td>130</td><th>Tanzania</th><td>1.75</td><td>1.74</td><td>362</td><td>383</td><td>224</td></tr>
						<tr><td>131</td><th>Nepal</th><td>1.73</td><td>3.38</td><td>10160</td><td>11797</td><td>5474</td></tr>
						<tr><td>132</td><th>Niger</th><td>1.71</td><td>1.39</td><td>42</td><td>47</td><td>23</td></tr>
						<tr><td>133</td><th>Guyana</th><td>1.71</td><td>0.81</td><td>563</td><td>632</td><td>347</td></tr>
						<tr><td>134</td><th>Argentina</th><td>1.70</td><td>0.78</td><td>23690</td><td>26451</td><td>10732</td></tr>
						<tr><td>135</td><th>Mauritius</th><td>1.62</td><td>1.91</td><td>127</td><td>171</td><td>122</td></tr>
						<tr><td>136</td><th>Haiti</th><td>1.62</td><td>1.86</td><td>113</td><td>138</td><td>81</td></tr>
						<tr><td>137</td><th>Paraguay</th><td>1.56</td><td>1.91</td><td>1370</td><td>1526</td><td>772</td></tr>
						<tr><td>138</td><th>Seychelles</th><td>1.52</td><td>0.77</td><td>40</td><td>41</td><td>14</td></tr>
						<tr><td>139</td><th>Kazakhstan</th><td>1.52</td><td>1.37</td><td>632</td><td>945</td><td>725</td></tr>
						<tr><td>140</td><th>Fiji</th><td>1.50</td><td>0.67</td><td>69</td><td>69</td><td>25</td></tr>
						<tr><td>141</td><th>Uzbekistan</th><td>1.49</td><td>0.62</td><td>1158</td><td>1660</td><td>1172</td></tr>
						<tr><td>142</td><th>Armenia</th><td>1.46</td><td>0.88</td><td>111</td><td>168</td><td>122</td></tr>
						<tr><td>143</td><th>Algeria</th><td>1.42</td><td>0.56</td><td>5007</td><td>5322</td><td>3824</td></tr>
						<tr><td>144</td><th>Azerbaijan</th><td>1.37</td><td>0.60</td><td>1355</td><td>1599</td><td>1097</td></tr>
						<tr><td>154</td><th>Mali</th><td>1.34</td><td>1.25</td><td>93</td><td>124</td><td>97</td></tr>
						<tr><td>146</td><th>Cambodia</th><td>1.29</td><td>7.30</td><td>473</td><td>549</td><td>384</td></tr>
						<tr><td>147</td><th>Angola</th><td>1.27</td><td>1.16</td><td>241</td><td>279</td><td>144</td></tr>
						<tr><td>148</td><th>Gabon</th><td>1.23</td><td>0.98</td><td>136</td><td>173</td><td>117</td></tr>
						<tr><td>149</td><th>Bhutan</th><td>1.22</td><td>2.47</td><td>10</td><td>9</td><td>5</td></tr>
						<tr><td>150</td><th>Marshall Islands</th><td>1.19</td><td>6.22</td><td>30</td><td>33</td><td>8</td></tr>
						<tr><td>151</td><th>Senegal</th><td>1.18</td><td>0.44</td><td>397</td><td>498</td><td>360</td></tr>
						<tr><td>152</td><th>Nigeria</th><td>1.16</td><td>1.56</td><td>2693</td><td>2967</td><td>1409</td></tr>
						<tr><td>153</td><th>Ghana</th><td>1.14</td><td>1.10</td><td>638</td><td>732</td><td>447</td></tr>
						<tr><td>154</td><th>Togo</th><td>1.09</td><td>0.82</td><td>158</td><td>194</td><td>140</td></tr>
						<tr><td>155</td><th>Chad</th><td>1.09</td><td>0.97</td><td>22</td><td>26</td><td>21</td></tr>
						<tr><td>156</td><th>Sierra Leone</th><td>1.07</td><td>1.40</td><td>6</td><td>7</td><td>5</td></tr>
						<tr><td>157</td><th>Suriname</th><td>1.05</td><td>0.69</td><td>220</td><td>240</td><td>130</td></tr>
						<tr><td>158</td><th>Mauritania</th><td>1.02</td><td>0.30</td><td>85</td><td>90</td><td>64</td></tr>
						<tr><td>159</td><th>Equatorial Guinea</th><td>1.01</td><td>1.13</td><td>10</td><td>11</td><td>9</td></tr>
						<tr><td>160</td><th>São Tomé and Príncipe</th><td>0.98</td><td>1.27</td><td>24</td><td>25</td><td>18</td></tr>
						<tr><td>161</td><th>Zambia</th><td>0.91</td><td>1.28</td><td>86</td><td>97</td><td>62</td></tr>
						<tr><td>162</td><th>Pakistan</th><td>0.86</td><td>0.57</td><td>9795</td><td>13195</td><td>9141</td></tr>
						<tr><td>163</td><th>Bangladesh</th><td>0.86</td><td>2.65</td><td>23702</td><td>27739</td><td>8293</td></tr>
						<tr><td>164</td><th>Rwanda</th><td>0.81</td><td>1.03</td><td>78</td><td>41</td><td>26</td></tr>
						<tr><td>165</td><th>Libya</th><td>0.75</td><td>0.63</td><td>592</td><td>691</td><td>452</td></tr>
						<tr><td>166</td><th>Djibouti</th><td>0.75</td><td>0.26</td><td>19</td><td>30</td><td>21</td></tr>
						<tr><td>167</td><th>Lebanon</th><td>0.74</td><td>0.92</td><td>1778</td><td>2556</td><td>1305</td></tr>
						<tr><td>168</td><th>DR Congo</th><td>0.73</td><td>0.51</td><td>47</td><td>58</td><td>55</td></tr>
						<tr><td>169</td><th>Venezuela</th><td>0.71</td><td>0.41</td><td>10773</td><td>11255</td><td>5937</td></tr>
						<tr><td>170</td><th>Botswana</th><td>0.66</td><td>0.96</td><td>189</td><td>219</td><td>138</td></tr>
						<tr><td>171</td><th>Comoros</th><td>0.65</td><td>0.26</td><td>5</td><td>5</td><td>4</td></tr>
						<tr><td>172</td><th>Benin</th><td>0.65</td><td>0.86</td><td>84</td><td>104</td><td>77</td></tr>
						<tr><td>173</td><th>Maldives</th><td>0.55</td><td>0.81</td><td>242</td><td>310</td><td>116</td></tr>
						<tr><td>174</td><th>Somalia</th><td>0.52</td><td>0.48</td><td>267</td><td>355</td><td>143</td></tr>
						<tr><td>175</td><th>Yemen</th><td>0.46</td><td>0.15</td><td>551</td><td>597</td><td>574</td></tr>
						<tr><td>176</td><th>Malawi</th><td>0.41</td><td>0.71</td><td>5</td><td>9</td><td>9</td></tr>
						<tr><td>177</td><th>Congo Republic</th><td>0.39</td><td>1.88</td><td>19</td><td>21</td><td>14</td></tr>
						<tr><td>178</td><th>East Timor</th><td>0.36</td><td>0.62</td><td>7</td><td>8</td><td>9</td></tr>
						<tr><td>179</td><th>Afghanistan</th><td>0.34</td><td>0.23</td><td>59</td><td>77</td><td>51</td></tr>
						<tr><td>180</td><th>Turkmenistan</th><td>0.32</td><td>0.59</td><td>11</td><td>13</td><td>8</td></tr>
						<tr><td>181</td><th>Namibia</th><td>0.30</td><td>0.38</td><td>431</td><td>313</td><td>166</td></tr>
						<tr><td>182</td><th>Gambia</th><td>0.29</td><td>0.54</td><td>16</td><td>15</td><td>15</td></tr>
						<tr><td>183</td><th>Ethiopia</th><td>0.27</td><td>0.55</td><td>1346</td><td>1605</td><td>967</td></tr>
						<tr><td>184</td><th>Burundi</th><td>0.23</td><td>0.21</td><td>9</td><td>12</td><td>9</td></tr>
						<tr><td>185</td><th>Tajikistan</th><td>0.23</td><td>0.82</td><td>44</td><td>71</td><td>45</td></tr>
						<tr><td>186</td><th>Guinea</th><td>0.21</td><td>0.76</td><td>30</td><td>37</td><td>22</td></tr>
						<tr><td>187</td><th>China</th><td>0.13</td><td>4.87</td><td>705</td><td>769</td><td>198</td></tr>
						<tr><td>188</td><th>Ivory Coast</th><td>0.13</td><td>0.19</td><td>164</td><td>217</td><td>142</td></tr>
						<tr><td>189</td><th>Federated States of Micronesia</th><td>0.07</td><td>0.62</td><td>9</td><td>9</td><td>8</td></tr>
						<tr><td>190</td><th>Eritrea</th><td>0.05</td><td>0.17</td><td>1</td><td>3</td><td>2</td></tr>
						<tr><td>191</td><th>South Sudan</th><td>0.04</td><td>0.39</td><td>1</td><td>5</td><td>1</td></tr>
						<tr><td>192</td><th>Guinea-Bissau</th><td>0.01</td><td>1.53</td><td>1</td><td>1</td><td>1</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<h4 class="text-center">Fastest Internet &amp; Median Download Speeds 2020: Findings & Analysis</h4>
				<p>So, from these 2020 Internet speed results, what are some key findings? Generally, (excluding Hong Kong and Bermuda), Europe has the fastest Internet speeds in the world, lead by Scandinavian countries. Also Switzerland (4th fastest download speeds) and the Netherlands (5th fastest downloads). Many European countries have faster download and upload speeds, across large testing samples. Principalities and microstates also within Europe have excellent download and fast Internet speeds; Liechtenstein (1st), Andorra (9th), San Marino (11th). Worth noting is that these areas did have much lower testing samples at the time of measurement.</p>
				<p>Overall, if you're looking for a true 'winner' when it comes to the fastest Internet speeds worldwide, Scandinavian countries are world leading. Fast download AND upload speeds are available in Denmark, Sweden, Iceland, Finland and Norway. This region ranks highly for fast Internet speeds on a consistent basis, which is not just a nice have for citizens, but also a contributing factor as to why countries like Sweden produce so many <a target="_blank" href="https://www.theatlantic.com/business/archive/2017/09/sweden-startups/541413/">start-ups</a>.</p>
				<p>The USA ranks 13th for median download speeds. It is also the largest country by both population and size to perform well for download speed, over the largest testing samples. Upload speeds only measure 10.45 Mbps though.</p>
			</div>
		</div>
	
		<div class="container_fluid no-top" id="top-10-worldwide">
			<div class="container">
				<h3 class="text-center">Top 10 Worldwide Average Internet Speeds</h3> 
				<table class="states countries">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q4 2015 Avg. Mbps</strong></th>
							<th>% Above 4 Mbps</th>
							<th>% Above 10 Mbps</th>
							<th>% Above 15 Mbps</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Global Average</th><td><strong>5.6</strong></td><td>-</td><td>-</td><td>-</td></tr>
						<tr><th>South Korea</th><td><strong>26.7</strong></td><td>96.7%</td><td>80.5%</td><td>62.6%</td></tr>
						<tr><th>Sweden</th><td><strong>19.1</strong></td><td>93%</td><td>59.5%</td><td>42.4%</td></tr>
						<tr><th>Norway</th><td><strong>18.8</strong></td><td>89.8%</td><td>61.8%</td><td>44.7%</td></tr>
						<tr><th>Japan</th><td><strong>17.4</strong></td><td>91.1%</td><td>62.8%</td><td>40.3%</td></tr>
						<tr><th>Netherlands</th><td><strong>17.0</strong></td><td>95.7%</td><td>64.5%</td><td>38.8%</td></tr>
						<tr><th>Hong Kong</th><td><strong>16.8</strong></td><td>93.2%</td><td>61.1%</td><td>37.8%</td></tr>
						<tr><th>Switzerland</th><td><strong>16.7</strong></td><td>93.6%</td><td>62.1%</td><td>37.5%</td></tr>
						<tr><th>Latvia</th><td><strong>16.7</strong></td><td>92.5%</td><td>54.1%</td><td>37%</td></tr>
						<tr><th>Finland</th><td><strong>16.6</strong></td><td>91%</td><td>57.4%</td><td>34.4%</td></tr>
						<tr><th>Denmark</th><td><strong>16.1</strong></td><td>94.3%</td><td>60.1%</td><td>37.7%</td></tr>
					</tbody>
				</table>
				<div class="divider20"></div>				
			</div>
		</div>
		
		<div class="container_fluid no-top" id="top-10-comparison">
			<div class="container">
				<h3 class="text-center">Update: Top 10 Average Internet Speeds Comparison - Q3 2016</h3> 
				<table class="states countries-update">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q3 2016 Avg. Mbps</strong></th>
							<th>YoY Change</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Global Average</th><td><strong>6.3</strong></td><td>2.3%</td></tr>
						<tr><th>South Korea</th><td><strong>26.3</strong></td><td>-2.5%</td></tr>
						<tr><th>Hong Kong</th><td><strong>20.1</strong></td><td>3.4%</td></tr>
						<tr><th>Norway</th><td><strong>20.0</strong></td><td>-0.2%</td></tr>
						<tr><th>Sweden</th><td><strong>19.7</strong></td><td>4.6%</td></tr>
						<tr><th>Switzerland</th><td><strong>18.4</strong></td><td>0.5%</td></tr>
						<tr><th>Singapore</th><td><strong>18.2</strong></td><td>5.3%</td></tr>
						<tr><th>Japan</th><td><strong>18.0</strong></td><td>5.1%</td></tr>
						<tr><th>Finland</th><td><strong>17.6</strong></td><td>0%</td></tr>
						<tr><th>Netherlands</th><td><strong>17.3</strong></td><td>2.1%</td></tr>
						<tr><th>Latvia</th><td><strong>16.9</strong></td><td>-3.5%</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<p><strong>As of Q3 2016, generally there has been increases to average internet speeds. The above table shows an overall comparison of internet speeds from 2015 to 2016.</strong></p>
				<ul>
					<li>Globally, average internet speeds increased from 5.6Mbps to 6.3Mbps by Q3 of 2016.</li>
					<li>South Korea maintains #1 spot for average speed. (Despite a small decrease in average speed measured from Q4 of 2015).</li>
					<li>Singapore jumps into the top 10, to 6th spot with 18.2Mbps. +45% average internet speed increase YoY.</li>
					<li>Denmark the only country to drop outside the top 10 from 2015. Despite a 19% YoY increase, (replaced by Singapore).</li>
					<li>All other countries in the top 10 from 2015, increased average internet speed in 2016.</li>
				</ul>
			</div>
		</div>
	
		<div class="container_fluid no-top" id="top-10-comparison-2017">
			<div class="container">
				<h3 class="text-center">Update: Top 10 Average Internet Speeds Comparison - Q1 2017</h3> 
				<table class="states countries-update-bis">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q1 2017 Avg. Mbps</strong></th>
							<th>YoY Change</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Global Average</th><td><strong>7.2</strong></td><td>15%</td></tr>
						<tr><th>South Korea</th><td><strong>28.6</strong></td><td>-1.7%</td></tr>
						<tr><th>Norway</th><td><strong>23.5</strong></td><td>10%</td></tr>
						<tr><th>Sweden</th><td><strong>22.5</strong></td><td>9.2%</td></tr>
						<tr><th>Hong Kong</th><td><strong>21.9</strong></td><td>10%</td></tr>
						<tr><th>Switzerland</th><td><strong>21.7</strong></td><td>16%</td></tr>
						<tr><th>Finland</th><td><strong>20.5</strong></td><td>15%</td></tr>
						<tr><th>Singapore</th><td><strong>20.3</strong></td><td>24%</td></tr>
						<tr><th>Japan</th><td><strong>20.2</strong></td><td>11%</td></tr>
						<tr><th>Denmark</th><td><strong>20.1</strong></td><td>17%</td></tr>
						<tr><th>United States</th><td><strong>18.7</strong></td><td>22%</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<p><strong>New speed data as of Q1 2017:</strong> Overall, worldwide average internet speeds increased again in Q1 of 2017. The above table compares YoY averages.</p>
				<ul>
					<li>Worldwide average internet speed increased to 7.2Mbps in Q1 of 2017. Average speed has increased from 5.6Mbps in Q4 of 2015 to now, or +28.57%.</li>
					<li><a href="https://www.fastmetrics.com/internet-connection-speed-by-country.php#country-with-fastest-internet-speed">South Korea retains 1st place for fastest average internet speed in 2017</a>. (Despite a YoY decrease of -1.7%). South Korea has maintained the fastest average internet speeds, since we began documenting data in Q4 of 2015.</li>
					<li>Latvia and The Netherlands fell out of the top 10 in Q1 of 2017. (Replaced by Denmark and the USA).</li>
					<li>USA entered the top 10 for the first time, recording a +22% increase to average internet speeds.</li>
					<li>Denmark regained it's position in the top 10, after dropping out in Q3 of 2016. Average internet speed in Denmark increased +17% YoY.</li> 
					<li>Singapore recorded the largest increase to average speed with a +24% increase, to 20.3Mbps in Q1 of 2017.</li>
					<li>4 out of the top 10 countries for internet speed are in Asia (South Korea, Hong Kong, Singapore, Japan).</li>
					<li>Another 4 out of the top 10 countries for internet speed are in Scandinavia (Norway, Sweden, Finland, Denmark).</li>
				</ul>				
			</div>
		</div>
		
		<div class="container_fluid blue-bg white" id="average-speed-internet">
			<div class="container">
				<h3 class="text-center">What is the average speed of internet?</h3>
				<p>The average speed of internet varies greatly from country to country. Higher averages can be observed in Asian and Scandinavian countries. Overall, average global internet speed is 5.6Mbps, as of Q4 in 2015.</p>
				<p>In Q3 of 2016, the global average internet speed increased to 6.3Mbps, which represents a 2.3% improvement. (Average global speeds are according to Akamai data and reporting, collected from 200 different countries).</p>
				<p><strong>As of Q1 of 2017</strong>, the worldwide average internet speed was 7.2Mbps, according to Akamai data. Year on year, this represented a +15% increase.</p>
			</div>
		</div>
		
		<div class="container_fluid" id="country-with-fastest-internet-speed">
			<div class="container">
				<h3 class="text-center">What country has the fastest internet speed?</h3>
				<p>South Korea has the fastest internet speed based on Akamai data and other external speed testing. Average internet speed in South Korea was 21.1Mbps above the global average, in Q4 of 2015.</p>
				<p><strong>In Q1 of 2017:</strong>, South Korean internet speeds were again significantly faster than the rest of the world. This is despite a small YoY speed decrease of -1.7%. At this time, average South Korean internet speeds of 28.6Mbps, exceeded that of 2nd place Norway by a considerable 5.1Mbps.</p>
				<ul>
					<li>An incredible 62.6% of internet connections in this country <a href="https://www.fastmetrics.com/compare-internet-services.php" title="connect at speeds above 15Mbps">connect at speeds above 15Mbps</a>.</li>
					<li>80.5% of connections have an average speed faster than 10Mbps (or almost double the global average internet speed).</li> 
				</ul>
				<p>South Korea was the first country to complete the <a href="https://en.wikipedia.org/wiki/Internet_in_South_Korea#National_program" target="_blank">upgrade from dial-up internet to broadband</a>, doing so in 2005. South Korea is also home to the most internet users per capita and the heaviest data usage worldwide. According to PCMag, better government planning in South Korea has improved internet connection speeds across the country dramatically. Additionally, a competitive Korean ISP market has led to exceptional service levels for end users. In the city of Cheongju, <a target="_blank" href="http://au.pcmag.com/networking/30145/feature/fastest-isps-2015-south-korea#">average internet speeds to citizens of 124.5Mbps</a> are standard. Further, <a href="https://www.fastmetrics.com/1000-mbps-internet-service.php" title="1Gbps internet plans">1Gbps internet plans</a> are available in South Korea for just $20 USD.</p>
				<p>Average <a href="#top-10-comparison-2018">download speed data from May 2018</a> (via M-Lab), shows Singapore had the fastest average download speeds of 60.39Mbps, followed by Sweden (46Mbps) then Denmark (43.99Mbps). Surprisingly, South Korea came in at 30th position for average download speeds at this time, with 20.63Mbps.</p>
			</div>
		</div>
		
		<div class="container_fluid blue-bg white" id="fastest-internet-in-the-world">
			<div class="container">
				<h3 class="text-center">Where is the fastest internet in the world?</h3>
				<p>In terms of the fastest internet connection speeds, (that are <a href="http://www.extremetech.com/extreme/192929-255tbps-worlds-fastest-network-could-carry-all-the-internet-traffic-single-fiber" target="_blank" class="white">not scientific tests</a> and available for consumer or business use), South Korea is also a world leader. Other Asian countries also have some of the fastest internet in the world. Japan and Hong Kong residents on average, connected at internet speeds above 16Mbps in Q4 of 2015.</p>
				<p>The other worldwide region which is leading the way in faster internet is Scandinavia. For a region with a much smaller population when compared to Asian, European and North American countries, Scandinavian countries have internet that connects at fast speeds and at scale.</p>
				<ul>
					<li><a href="https://www.fastmetrics.com/internet-connection-speed-by-country.php#top-10-europe-africa" class="white">Sweden, Norway, Finland and Denmark ALL have average internet speeds above 16Mbps</a>.</li>
					<li>Denmark: 94% of internet connection speeds faster than 4Mbps in Q4 of 2015.</li>
					<li>Norway: 44.7% of internet connection speeds above 15Mbps.</li>
					<li>Sweden: 93% of internet speeds faster than 4Mbps.</li>
					<li>Finland: 91% of internet connections faster than 4Mbps.</li>
				</ul>
				<p>Apart from the concentrated Scandinavian region, The Netherlands, Switzerland and Latvia provide some of the fastest internet in the world. These countries actually rank above Finland and Denmark for internet speed.</p>  
				<p><strong>Q4 2015 Internet Speed Data:</strong></p>
				<ul>
					<li>Netherlands: Internet speed average of 17Mbps. (95.7% of connections > 4Mbps).</li>
					<li>Switzerland: Average internet speed of 16.7Mbps.</li>
					<li>Latvia: Average internet connection speed also 16.7Mbps.</li>
				</ul>
			</div>
		</div>

		<div class="container_fluid" id="top-10-asia-pacific">
			<div class="container">
				<h3 class="text-center">Top 10 Average Internet Speeds: Asia Pacific Countries</h3> 
				<table class="states countries">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q4 2015 Avg. Mbps</strong></th>
							<th>% Above 4 Mbps</th>
							<th>% Above 10 Mbps</th>
							<th>% Above 15 Mbps</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>South Korea</th><td><strong>26.7</strong></td><td>96.7%</td><td>80.5%</td><td>62.6%</td></tr>
						<tr><th>Japan</th><td><strong>17.4</strong></td><td>91.1%</td><td>62.8%</td><td>40.3%</td></tr>
						<tr><th>Hong Kong</th><td><strong>16.8</strong></td><td>93.2%</td><td>61.1%</td><td>37.8%</td></tr>
						<tr><th>Singapore</th><td><strong>13.9</strong></td><td>90.8%</td><td>59.3%</td><td>32%</td></tr>
						<tr><th>Taiwan</th><td><strong>12.9</strong></td><td>90.3%</td><td>44.5%</td><td>24.4%</td></tr>
						<tr><th>New Zealand</th><td><strong>9.3</strong></td><td>87.4%</td><td>25.5%</td><td>10.8%</td></tr>
						<tr><th>Thailand</th><td><strong>9.3</strong></td><td>95.3%</td><td>26.1%</td><td>8.2%</td></tr>
						<tr><th>Australia</th><td><strong>8.2</strong></td><td>72.9%</td><td>19.5%</td><td>8.3%</td></tr>
						<tr><th>Malaysia</th><td><strong>5.2</strong></td><td>55.6%</td><td>5.5%</td><td>1.2%</td></tr>
						<tr><th>Sri Lanka</th><td><strong>4.8</strong></td><td>52.3%</td><td>3.5%</td><td>1.3%</td></tr>
					</tbody>
				</table>
				<div class="divider20"></div>
			</div>
		</div>
	
		<div class="container_fluid blue-bg white" id="average-internet-speeds-usa">
			<div class="container">
				<h3 class="text-center">Average Internet Speeds In America Increasing</h3>
				<p>Average internet speeds in the USA have increased by 12.69% QoQ, according to Akamai data. In Q3 of 2015, <a href="https://www.fastmetrics.com/internet-connection-speed-map-usa.php#average-speeds-by-country" class="white">average connection speeds were 12.6Mbps</a>. Whilst this is a positive for consumers, both peak and average internet speeds in the USA are well outside the <a href="https://www.fastmetrics.com/internet-connection-speed-by-country.php#top-10-worldwide" class="white">global top 10</a>.</p>
				<p><strong>Q3 2016 update:</strong> Average internet speeds in the USA were 16.3Mbps. Compared to Q4 of 2015, this represents a 14.78% increase.</p>
				<p><strong>Q1 2017 update:</strong> Average internet speeds in the USA increased to 18.7Mbps in 2017. This represented a +22% increase YoY, according to Akamai data. In Q1 of 2017, the <a href="https://www.fastmetrics.com/internet-connection-speed-by-country.php#top-10-comparison-2017" class="white">USA enters top 10 average internet speed countries</a> for the first time.</p>
				<div class="divider20"></div>
				<h4>Increases to internet speeds in the USA can be attributed to 2 major developments;</h4>
				<p><strong>1.</strong> Many ISPs across the USA have been aggressively updating infrastructure and improving network performance. This is to meet end user's insatiable demand for more bandwidth, as well as <a href="https://www.fastmetrics.com/blog/internet-services/dedicated-internet-access/" class="white">higher service expectations</a>.</p>
				<ul>
					<li>Increased bandwidth has become necessary to satisfy requirements for online gaming, file sharing, <a href="https://www.ustream.tv/blog/streaming-product-updates/4k-streaming-video-platform-for-live-and-vod/" class="white" target="_blank" rel="nofollow">streaming</a>, <a href="https://www.fastmetrics.com/blog/tech/what-is-cloud-computing/" class="white">cloud based services</a>, video and <a href="https://www.fastmetrics.com/hostedbusinessvoip.php" class="white">VoIP phone systems</a>, to name just a few.</li>
				</ul>
				<p><strong>2.</strong> The availability of <a href="https://www.fastmetrics.com/fiber-optic-internet.php" class="white">fiber internet services</a> on a wider scale. New <a href="https://muninetworks.org/communitymap" target="_blank" class="white" rel="nofollow">community based fiber service</a> and providers such as <a href="https://www.fastmetrics.com/google-fiber-guide" class="white">Google Fiber</a> have entered the market in certain areas. Affordable, higher speed fiber internet connectivity is now more prevalent.</p>
				<ul>
					<li>There's no doubt that <a href="https://www.theverge.com/2017/7/12/15715030/what-is-net-neutrality-fcc-ajit-pai-bill-rules-repealed" class="white" target="_blank" rel="nofollow">healthy competition also benefits consumer internet access speeds</a>.</li>
				</ul>
				<div class="divider20"></div>
				<h4>How fast are internet speeds in the USA compared to the rest of the world?</h4>
				<p>To summarize, internet speeds in the USA are well above the global average of 5.6Mbps. Within the Americas region, the USA ranks #1. On a regional level, South, Central and North American countries provide slow internet speeds, when compared on a global scale. To see how internet service speeds perform on a US state vs state level, see our <a href="https://www.fastmetrics.com/internet-connection-speed-map-usa.php" class="white">internet speeds by state</a> map.</p>
			</div>
		</div>
		
		<div class="container_fluid" id="top-10-america">
			<div class="container">
				<h3 class="text-center">Top 10 Average Internet Speeds: American Countries</h3> 
				<table class="states countries">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q4 2015 Avg. Mbps</strong></th>
							<th>% Above 4 Mbps</th>
							<th>% Above 10 Mbps</th>
							<th>% Above 15 Mbps</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>United States</th><td><strong>14.2</strong></td><td>82.8%</td><td>52.9%</td><td>31.6%</td></tr>
						<tr><th>Canada</th><td><strong>13.1</strong></td><td>88.2%</td><td>48.8%</td><td>27%</td></tr>
						<tr><th>Uruguay</th><td><strong>6.2</strong></td><td>71.7%</td><td>8.8%</td><td>2%</td></tr>
						<tr><th>Chile</th><td><strong>6.1</strong></td><td>67.3%</td><td>10.1%</td><td>2.8%</td></tr>
						<tr><th>Mexico</th><td><strong>5.9</strong></td><td>67.9%</td><td>8.2%</td><td>2.2%</td></tr>
						<tr><th>Argentina</th><td><strong>4.7</strong></td><td>46.2%</td><td>4.4%</td><td>0.7%</td></tr>
						<tr><th>Peru</th><td><strong>4.5</strong></td><td>47.1%</td><td>2.9%</td><td>0.9%</td></tr>
						<tr><th>Colombia</th><td><strong>4.5</strong></td><td>50.6%</td><td>2.2%</td><td>0.5%</td></tr>
						<tr><th>Ecuador</th><td><strong>4.4</strong></td><td>41.8%</td><td>3.3%</td><td>0.8%</td></tr>
						<tr><th>Brazil</th><td><strong>4.1</strong></td><td>39%</td><td>2.9%</td><td>0.8%</td></tr>	
					</tbody>
				</table>
				<div class="divider40"></div>
				<p><strong>Within the Americas region, the below countries experienced the largest increases to average internet speed when comparing 2016 with 2015;</strong></p>
				<ul>
					<li>Brazil: the largest increase to average internet speed YoY. Internet speeds of 5.5Mbps in Q3 of 2016 (+51%).</li>
					<li>Panama: jumps into the top 10 for the Americas region. Averaging 5.2Mbps across 2016. (+48%).</li>
					<li>Bolivia: Averaging 2.4Mbps in 2016. (+35%).</li>
				</ul>
			</div>
		</div>

		<div class="container_fluid no-top" id="top-10-europe-africa">
			<div class="container">
				<h3 class="text-center">Top 10 Average Internet Speeds: European Countries</h3> 
				<table class="states countries">
					<thead>
						<tr>
							<th>Country</th>
							<th><strong>Q4 2015 Avg. Mbps</strong></th>
							<th>% Above 4 Mbps</th>
							<th>% Above 10 Mbps</th>
							<th>% Above 15 Mbps</th>
						</tr>
					</thead>
					<tbody>
						<tr><th>Sweden</th><td><strong>19.1</strong></td><td>93%</td><td>59.5%</td><td>42.4%</td></tr>
						<tr><th>Norway</th><td><strong>18.8</strong></td><td>89.8%</td><td>61.8%</td><td>44.7%</td></tr>
						<tr><th>Netherlands</th><td><strong>17.0</strong></td><td>95.7%</td><td>64.5%</td><td>38.8%</td></tr>
						<tr><th>Switzerland</th><td><strong>16.7</strong></td><td>93.6%</td><td>62.1%</td><td>37.5%</td></tr>
						<tr><th>Latvia</th><td><strong>16.7</strong></td><td>92.5%</td><td>54.1%</td><td>37%</td></tr>
						<tr><th>Finland</th><td><strong>16.6</strong></td><td>91%</td><td>57.4%</td><td>34.4%</td></tr>
						<tr><th>Denmark</th><td><strong>16.1</strong></td><td>94.3%</td><td>60.1%</td><td>37.7%</td></tr>
						<tr><th>Czech Republic</th><td><strong>15.9</strong></td><td>88.4%</td><td>51.2%</td><td>30.5%</td></tr>
						<tr><th>United Kingdom</th><td><strong>13.9</strong></td><td>89%</td><td>49.8%</td><td>32.3%</td></tr>
						<tr><th>Romania</th><td><strong>13.2</strong></td><td>91.3%</td><td>53.3%</td><td>28.2%</td></tr>	
					</tbody>
				</table>
				<div class="divider20"></div>
			</div>
		</div>
		
		<div class="container_fluid no-top" id="top-10-comparison-2018">
			<div class="container">
				<h3 class="text-center">Top 50 Average Download Speeds June 2017 - May 2018</h3> 
				<table class="states countries-update-last">
					<thead>
						<tr>
							<th>Rank</th>
							<th>Country</th>
							<th><strong>Average Download Speed (Mbps)</strong></th>
							<th>Total Tests</th>
							<th>Time To Download HD Movie (5GB)</th>
							<th>2017 Rank</th>
							<th>Position Change</th>
							<th>2017 Average Download Speed (Mbps)</th>
							<th>2017 Download Speed Change (Mbps)</th>

						</tr>
					</thead>
					<tbody>
						<tr><th>1</th><td>Singapore</td><td><strong>60.39</strong></td><td>524,018</td><td>11 Mins, 18 Secs</td><td>1</td><td>=</td><td>55.13</td><td>5.26</td></tr>
						<tr><th>2</th><td>Sweden</td><td><strong>46.00</strong></td><td>367,241</td><td>14 Mins, 50 Secs</td><td>2</td><td>=</td><td>40.16</td><td>5.84</td></tr>
						<tr><th>3</th><td>Denmark</td><td><strong>43.99</strong></td><td>150,529</td><td>15 Mins, 31 Secs</td><td>4</td><td><i class="fa fa-angle-up"></i> 1</td><td>33.54</td><td>10.45</td></tr>
						<tr><th>4</th><td>Norway</td><td><strong>40.12</strong></td><td>86,920</td><td>17 Mins, 01 Secs</td><td>7</td><td><i class="fa fa-angle-up"></i> 3</td><td>29.13</td><td>10.99</td></tr>
						<tr><th>5</th><td>Romania</td><td><strong>38.60</strong></td><td>175,948</td><td>17 Mins, 41 Secs</td><td>18</td><td><i class="fa fa-angle-up"></i> 13</td><td>21.33</td><td>17.27</td></tr>
						<tr><th>6</th><td>Belgium</td><td><strong>36.71</strong></td><td>174,249</td><td>18 Mins, 36 Secs</td><td>8</td><td><i class="fa fa-angle-up"></i> 2</td><td>27.37</td><td>9.34</td></tr>
						<tr><th>7</th><td>Netherlands</td><td><strong>35.95</strong></td><td>1,247,694</td><td>18 Mins, 59 Secs</td><td>5</td><td><i class="fa fa-angle-down"></i> 2</td><td>33.52</td><td>2.43</td></tr>
						<tr><th>8</th><td>Luxembourg</td><td><strong>35.14</strong></td><td>19,071</td><td>19 Mins, 26 Secs</td><td>33</td><td><i class="fa fa-angle-up"></i> 25</td><td>15.52</td><td>19.62</td></tr>
						<tr><th>9</th><td>Hungary</td><td><strong>34.01</strong></td><td>352,745</td><td>20 Mins, 04 Secs</td><td>15</td><td><i class="fa fa-angle-up"></i> 6</td><td>23.16</td><td>10.85</td></tr>
						<tr><th>10</th><td>Jersey</td><td><strong>30.90</strong></td><td>9,165</td><td>22 Mins, 06 Secs</td><td>14</td><td><i class="fa fa-angle-up"></i> 4</td><td>23.30</td><td>7.60</td></tr>
						<tr><th>11</th><td>Switzerland</td><td><strong>29.92</strong></td><td>156,463</td><td>22 Mins, 49 Secs</td><td>10</td><td><i class="fa fa-angle-down"></i> 1</td><td>26.93</td><td>2.99</td></tr>
						<tr><th>12</th><td>Japan</td><td><strong>28.94</strong></td><td>2,563,873</td><td>23 Mins, 35 Secs</td><td>12</td><td>=</td><td>24.47</td><td>4.47</td></tr>
						<tr><th>13</th><td>Latvia</td><td><strong>28.63</strong></td><td>41,186</td><td>23 Mins, 51 Secs</td><td>6</td><td><i class="fa fa-angle-down"></i> 7</td><td>30.36</td><td>-1.73</td></tr>
						<tr><th>14</th><td>Taiwan</td><td><strong>28.09</strong></td><td>112,628</td><td>24 Mins, 18 Secs</td><td>3</td><td><i class="fa fa-angle-down"></i> 11</td><td>34.40</td><td>-6.31</td></tr>
						<tr><th>15</th><td>Estonia</td><td><strong>27.91</strong></td><td>26,552</td><td>24 Mins, 28 Secs</td><td>13</td><td><i class="fa fa-angle-down"></i> 2</td><td>24.11</td><td>3.80</td></tr>
						<tr><th>16</th><td>Spain</td><td><strong>27.19</strong></td><td>3,993,706</td><td>25 Mins, 06 Secs</td><td>21</td><td><i class="fa fa-angle-up"></i> 5</td><td>19.60</td><td>7.59</td></tr>
						<tr><th>17</th><td>Lithuania</td><td><strong>27.17</strong></td><td>47,015</td><td>25 Mins, 08 Secs</td><td>11</td><td><i class="fa fa-angle-down"></i> 6</td><td>25.12</td><td>2.05</td></tr>
						<tr><th>18</th><td>Andorra</td><td><strong>27.14</strong></td><td>1,081</td><td>25 Mins, 09 Secs</td><td>42</td><td><i class="fa fa-angle-up"></i> 24</td><td>12.07</td><td>15.07</td></tr>
						<tr><th>19</th><td>Hong Kong</td><td><strong>26.45</strong></td><td>59,701</td><td>25 Mins, 48 Secs</td><td>9</td><td><i class="fa fa-angle-down"></i> 10</td><td>27.16</td><td>-0.71</td></tr>
						<tr><th>20</th><td>United States</td><td><strong>25.86</strong></td><td>89,548,425</td><td>26 Mins, 24 Secs</td><td>21</td><td><i class="fa fa-angle-up"></i> 1</td><td>20.00</td><td>5.86</td></tr>
						<tr><th>21</th><td>Slovakia</td><td><strong>25.30</strong></td><td>126,084</td><td>26 Mins, 59 Secs</td><td>23</td><td><i class="fa fa-angle-up"></i> 2</td><td>18.85</td><td>6.45</td></tr>
						<tr><th>22</th><td>Madagascar</td><td><strong>24.87</strong></td><td>4,179</td><td>27 Mins, 27 Secs</td><td>89</td><td><i class="fa fa-angle-up"></i> 67</td><td>3.49</td><td>21.38</td></tr>
						<tr><th>23</th><td>France</td><td><strong>24.23</strong></td><td>1,050,872</td><td>28 Mins, 10 Secs</td><td>37</td><td><i class="fa fa-angle-up"></i> 14</td><td>13.43</td><td>10.80</td></tr>
						<tr><th>24</th><td>Finland</td><td><strong>24.00</strong></td><td>69,850</td><td>28 Mins, 26 Secs</td><td>19</td><td><i class="fa fa-angle-down"></i> 5</td><td>20.90</td><td>3.10</td></tr>
						<tr><th>25</th><td>Germany</td><td><strong>24.00</strong></td><td>1,885,617</td><td>28 Mins, 27 Secs</td><td>24</td><td><i class="fa fa-angle-down"></i> 1</td><td>18.80</td><td>5.20</td></tr>
						<tr><th>26</th><td>New Zealand</td><td><strong>23.77</strong></td><td>996,322</td><td>28 Mins, 43 Secs</td><td>30</td><td><i class="fa fa-angle-up"></i> 4</td><td>16.85</td><td>6.92</td></tr>
						<tr><th>27</th><td>Czechia (Czech Republic)</td><td><strong>23.71</strong></td><td>304,158</td><td>28 Mins, 47 Secs</td><td>28</td><td><i class="fa fa-angle-up"></i> 1</td><td>17.31</td><td>6.40</td></tr>
						<tr><th>28</th><td>Slovenia</td><td><strong>21.41</strong></td><td>40,531</td><td>31 Mins, 53 Secs</td><td>25</td><td><i class="fa fa-angle-down"></i> 3</td><td>18.37</td><td>3.04</td></tr>
						<tr><th>29</th><td>Portugal</td><td><strong>21.28</strong></td><td>150,528</td><td>32 Mins, 05 Secs</td><td>17</td><td><i class="fa fa-angle-down"></i> 12</td><td>21.72</td><td>-0.44</td></tr>
						<tr><th>30</th><td>South Korea</td><td><strong>20.63</strong></td><td>198,867</td><td>33 Mins, 06 Secs</td><td>16</td><td><i class="fa fa-angle-down"></i> 14</td><td>22.90</td><td>-2.27</td></tr>
						<tr><th>31</th><td>Bulgaria</td><td><strong>20.20</strong></td><td>73,365</td><td>33 Mins, 48 Secs</td><td>27</td><td><i class="fa fa-angle-down"></i> 4</td><td>17.54</td><td>2.66</td></tr>
						<tr><th>32</th><td>Poland</td><td><strong>19.73</strong></td><td>484,908</td><td>34 Mins, 36 Secs</td><td>35</td><td><i class="fa fa-angle-up"></i> 3</td><td>14.88</td><td>4.85</td></tr>
						<tr><th>33</th><td>Canada</td><td><strong>19.48</strong></td><td>8,398,439</td><td>35 Mins, 03 Secs</td><td>26</td><td><i class="fa fa-angle-down"></i> 7</td><td>18.37</td><td>1.11</td></tr>
						<tr><th>34</th><td>Iceland</td><td><strong>18.85</strong></td><td>11,930</td><td>36 Mins, 13 Secs</td><td>47</td><td><i class="fa fa-angle-up"></i> 13</td><td>10.55</td><td>8.30</td></tr>
						<tr><th>35</th><td>United Kingdom</td><td><strong>18.57</strong></td><td>14,701,505</td><td>36 Mins, 46 Secs</td><td>31</td><td><i class="fa fa-angle-down"></i> 4</td><td>16.51</td><td>2.06</td></tr>
						<tr><th>36</th><td>Ireland</td><td><strong>18.22</strong></td><td>1,133,548</td><td>37 Mins, 28 Secs</td><td>36</td><td>=</td><td>13.92</td><td>4.30</td></tr>
						<tr><th>37</th><td>Liechtenstein</td><td><strong>17.71</strong></td><td>498</td><td>38 Mins, 33 Secs</td><td>44</td><td><i class="fa fa-angle-up"></i> 7</td><td>11.40</td><td>6.31</td></tr>
						<tr><th>38</th><td>Austria</td><td><strong>17.51</strong></td><td>123,698</td><td>39 Mins, 00 Secs</td><td>34</td><td><i class="fa fa-angle-down"></i> 4</td><td>15.26</td><td>2.25</td></tr>
						<tr><th>39</th><td>Barbados</td><td><strong>17.08</strong></td><td>2,182</td><td>39 Mins, 59 Secs</td><td>65</td><td><i class="fa fa-angle-up"></i> 26</td><td>6.62</td><td>10.46</td></tr>
						<tr><th>40</th><td>Thailand</td><td><strong>17.06</strong></td><td>1,678,485</td><td>40 Mins, 01 Secs</td><td>29</td><td><i class="fa fa-angle-down"></i> 11</td><td>16.85</td><td>0.21</td></tr>
						<tr><th>41</th><td>Macao</td><td><strong>16.12</strong></td><td>3,424</td><td>42 Mins, 22 Secs</td><td>20</td><td><i class="fa fa-angle-down"></i> 21</td><td>20.52</td><td>-4.40</td></tr>
						<tr><th>42</th><td>Croatia</td><td><strong>15.60</strong></td><td>104,939</td><td>43 Mins, 46 Secs</td><td>40</td><td><i class="fa fa-angle-down"></i> 2</td><td>12.57</td><td>3.03</td></tr>
						<tr><th>43</th><td>Italy</td><td><strong>15.10</strong></td><td>6,172,612</td><td>45 Mins, 12 Secs</td><td>46</td><td><i class="fa fa-angle-up"></i> 3</td><td>10.71</td><td>4.39</td></tr>
						<tr><th>44</th><td>Gibraltar</td><td><strong>14.71</strong></td><td>1,059</td><td>46 Mins, 24 Secs</td><td>38</td><td><i class="fa fa-angle-down"></i> 6</td><td>13.18</td><td>1.53</td></tr>
						<tr><th>45</th><td>Moldova</td><td><strong>13.88</strong></td><td>27,714</td><td>49 Mins, 11 Secs</td><td>45</td><td>=</td><td>10.75</td><td>3.13</td></tr>
						<tr><th>46</th><td>Malta</td><td><strong>13.60</strong></td><td>12,042</td><td>50 Mins, 13 Secs</td><td>48</td><td><i class="fa fa-angle-up"></i> 2</td><td>10.17</td><td>3.43</td></tr>
						<tr><th>47</th><td>Russia</td><td><strong>13.51</strong></td><td>1,513,521</td><td>50 Mins, 31 Secs</td><td>43</td><td><i class="fa fa-angle-down"></i> 4</td><td>11.59</td><td>1.92</td></tr>
						<tr><th>48</th><td>Malaysia</td><td><strong>13.30</strong></td><td>119,668</td><td>51 Mins, 21 Secs</td><td>63</td><td><i class="fa fa-angle-up"></i> 15</td><td>6.69</td><td>6.61</td></tr>
						<tr><th>49</th><td>Aruba</td><td><strong>13.27</strong></td><td>828</td><td>51 Mins, 27  Secs</td><td>97</td><td><i class="fa fa-angle-up"></i> 48</td><td>3.12</td><td>10.15</td></tr>
						<tr><th>50</th><td>Serbia</td><td><strong>13.00</strong></td><td>86,275</td><td>52 Mins, 31 Secs</td><td>41</td><td><i class="fa fa-angle-down"></i> 9</td><td>12.25</td><td>0.75</td></tr>
					</tbody>
				</table>
				<div class="divider40"></div>
				<p class="text-center"><strong>New data comparing average download speeds from June 2017 to May 2018:</strong></p>
				<p>Akamai now focuses their state of the Internet reports on online security threats and DDoS attacks. New data above, is from U.K based comparison site <a href="https://www.cable.co.uk/" target="_blank" rel="nofollow">Cable.co.uk</a>. Cable compiled download speed data from 163 million speed tests, in 200 countries. (Sourced over 12 months via <a href="https://www.measurementlab.net/" target="_blank" rel="nofollow">M-Lab</a> - a partnership between Google, Princeton, New America's Open Technology Institute and others).</p>
				<p><strong>Be aware new M-Lab data is download speed. Not average connection speed. (Download speed is typically faster than upload speed).</strong></p>
				<p>Below this text, we've included two tables. These compare data between the last <a href="#top-10-comparison-2017">Akamai Internet speed report in 2017</a> and the <a href="#top-10-comparison-2018">M-Lab download speed data</a>. There are of course some notable differences, but also similarities between the data sets. We included a breakdown below. Again, it's important to remember M-Lab data is average download speed. Akamai compiled average connection speed.</p>
				<p>What does analysis of our new top 50 internet download speeds show? Overwhelmingly, smaller and less populated European, Scandinavian and Asian countries are winning at providing higher internet download speeds.</p>
				<p>Apart from the obvious <strong>difference of average download speeds (M-Lab) vs. average connection speed (Akamai)</strong>, we've looked for trends between the two different data sets.</p>
				<p><strong>Similarities:</strong></p>
				<ul>
					<li>Strong representation and fast average internet and download speeds from Scandinavian countries across both data sources. (Sweden, Denmark, Norway all in top 5).</li>
					<li>Singapore and Japan have consistently fast average internet speeds and download speeds, across both data sets.</li>
					<li>Smaller European countries have good average internet and download speeds (Romania, Hungary, Belgium, Switzerland, Netherlands, Latvia).</li>
				</ul>
				<p><strong>Differences:</strong></p>
				<ul>
					<li>South Korea comes in at 30th place for download speed in the new top 50, via M-Lab data.</li> 
					<li><a href="#country-with-fastest-internet-speed">South Korea was a leader in average internet speeds</a> from Akamai data, since Q4 of 2015.</li>
					<li>Between 2017 - 2018, M-Lab data shows South Korea dropping 14 positions for average download speed.</li>
					<li>Over 2017 - 2018, M-Lab data shows no change to the top 2 countries for average internet download speed. (Singapore 1st and Sweden 2nd).</li>
					<li>Biggest year on year increases to average download speeds in the new top 50, are mostly in smaller countries or principalities.</li> 
					<li>Luxembourg, (population of approx. 600,000) moved up 25 positions to 8th. (Average download speed of 35.14Mbps. Speeds increased by 19.62Mbps year on year there).</li>
					<li>In Romania, average download speeds increased by more than 17Mbps YOY (5th overall ranking. Average download speed of 38.6Mbps).</li>
					<li>The principality of Andorra increased average download speeds by 15.07Mbps, year on year. (18th overall. Average speed of 27.14Mbps).</li>
					<li>Top 10 fastest average internet download speeds (M-Lab data), dominated by smaller countries both in geographical size and population. The most populous country of Japan, comes in at 14th position, with average download speeds of 28.94Mbps.</li>
					<li>USA drops to 20th according to M-Lab data, with an average download speed of 25.86Mbps.</li> 
					<li>Between 2017 - 2018 average download speeds in the USA increased by 5.86Mbps. This from the largest sample size of speed tests of any country in the top 50, (more than 89 million tests). </li>
					<li>In Q1 of 2017, Akamai reported average internet speeds of 18.7Mbps for the USA, or 10th overall worldwide.</li>
				</ul>
				<p>We will continue to monitor, update and compare year on year. Remember, new data measures average download speeds, not overall connection speed. Internet speed is very location dependent. Don't discount the importance of <a href="https://www.fastmetrics.com/blog/internet-services/dedicated-internet-access/">faster upload speeds</a> today. Take your own speed test and contribute to open internet performance data <a rel="nofollow" target="_blank" href="https://speed.measurementlab.net/#/">here</a>.</p>
				<div class="divider20"></div>
				<div class="row">
					<div class="col-sm-6">
						<p class="text-center"><strong>Per Akamai Technologies (Q1 2017)</strong></p>
						<table class="states countries-update-last-comparison-akamai">
						<thead>
							<tr>
								<th>Rank</th>
								<th>Country</th>
								<th><strong>Average Connection Speed (Mbps)</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr><th>1</th><td>South Korea</td><td><strong>28.6</strong></td></tr>
							<tr><th>2</th><td>Norway</td><td><strong>23.5</strong></td></tr>
							<tr><th>3</th><td>Sweden</td><td><strong>22.5</strong></td></tr>
							<tr><th>4</th><td>Hong Kong</td><td><strong>21.9</strong></td></tr>
							<tr><th>5</th><td>Switzerland</td><td><strong>21.7</strong></td></tr>
							<tr><th>6</th><td>Finland</td><td><strong>20.5</strong></td></tr>
							<tr><th>7</th><td>Singapore</td><td><strong>20.3</strong></td></tr>
							<tr><th>8</th><td>Japan</td><td><strong>20.2</strong></td></tr>
							<tr><th>9</th><td>Denmark</td><td><strong>20.1</strong></td></tr>
							<tr><th>10</th><td>United States</td><td><strong>18.7</strong></td></tr>
							<tr><th>11</th><td>Netherlands</td><td><strong>17.4</strong></td></tr>
							<tr><th>12</th><td>Romania</td><td><strong>17.0</strong></td></tr>
							<tr><th>13</th><td>Czech Republic</td><td><strong>16.9</strong></td></tr>
							<tr><th>14</th><td>United Kingdom</td><td><strong>16.9</strong></td></tr>
							<tr><th>15</th><td>Taiwan</td><td><strong>16.9</strong></td></tr>
							<tr><th>16</th><td>Latvia</td><td><strong>16.6</strong></td></tr>
							<tr><th>17</th><td>Belgium</td><td><strong>16.3</strong></td></tr>
							<tr><th>18</th><td>Canada</td><td><strong>16.2</strong></td></tr>
							<tr><th>19</th><td>Thailand</td><td><strong>16.0</strong></td></tr>
							<tr><th>20</th><td>Ireland</td><td><strong>15.6</strong></td></tr>
						</tbody>
						</table>
					</div>
					<div class="col-sm-6">
						<p class="text-center"><strong>Per Cable.co.uk and M-Lab (2017/18)</strong></p>
						<table class="states countries-update-last-comparison-cable">
						<thead>
							<tr>
								<th>Rank</th>
								<th>Country</th>
								<th><strong>Average Download Speed (Mbps)</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr><th>1</th><td>Singapore</td><td><strong>60.39</strong></td></tr>
							<tr><th>2</th><td>Sweden</td><td><strong>46.00</strong></td></tr>
							<tr><th>3</th><td>Denmark</td><td><strong>43.99</strong></td></tr>
							<tr><th>4</th><td>Norway</td><td><strong>40.12</strong></td></tr>
							<tr><th>5</th><td>Romania</td><td><strong>38.60</strong></td></tr>
							<tr><th>6</th><td>Belgium</td><td><strong>36.71</strong></td></tr>
							<tr><th>7</th><td>Netherlands</td><td><strong>35.95</strong></td></tr>
							<tr><th>8</th><td>Luxembourg</td><td><strong>35.14</strong></td></tr>
							<tr><th>9</th><td>Hungary</td><td><strong>34.01</strong></td></tr>
							<tr><th>10</th><td>Jersey</td><td><strong>30.90</strong></td></tr>
							<tr><th>11</th><td>Switzerland</td><td><strong>29.92</strong></td></tr>
							<tr><th>12</th><td>Japan</td><td><strong>28.94</strong></td></tr>
							<tr><th>13</th><td>Latvia</td><td><strong>28.63</strong></td></tr>
							<tr><th>14</th><td>Taiwan</td><td><strong>28.09</strong></td></tr>
							<tr><th>15</th><td>Estonia</td><td><strong>27.91</strong></td></tr>
							<tr><th>16</th><td>Spain</td><td><strong>27.19</strong></td></tr>
							<tr><th>17</th><td>Lithuania</td><td><strong>27.17</strong></td></tr>
							<tr><th>18</th><td>Andorra</td><td><strong>27.14</strong></td></tr>
							<tr><th>19</th><td>Hong Kong</td><td><strong>26.45</strong></td></tr>
							<tr><th>20</th><td>United States</td><td><strong>25.86</strong></td></tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="divider20"></div>
				<p class="text-center">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-2924661314882202" data-ad-slot="6852497125"></ins>
					<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				</p>
			</div>
		</div>
		
		<!--<div class="container_fluid text-center mobile-no-top black-bg white desktop-only services">
			<div class="container">	
				<h3 class="text-center">Dedicated Business Services</h3>
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

	function drawRegionsMap() {
		var data = google.visualization.arrayToDataTable([
			['Country', 'Average Internet Speed (Mbps)'],
			['Andorra', 13.7],
			['United Arab Emirates', 6.9],
			['Afghanistan', 1.1],
			['Antigua and Barbuda', 2.1],
			['Anguilla', 5.0],
			['Albania', 5.8],
			['Armenia', 3.9],
			['Angola', 2.1],
			['Antarctica', 11.3],
			['Argentina', 4.7],
			['American Samoa', 1.3],
			['Austria', 12.3],
			['Australia', 8.2],
			['Aruba', 6.2],
			['Azerbaidjan', 3.6],
			['Bosnia-Herzegovina', 6.9],
			['Barbados', 6.1],
			['Bangladesh', 2.7],
			['Belgium', 14.2],
			['Burkina Faso', 0.6],
			['Bulgaria', 13.3],
			['Bahrain', 4.4],
			['Burundi', 3.6],
			['Benin', 1.1],
			['Bermuda', 5.2],
			['Brunei Darussalam', 4.1],
			['Bolivia', 2.0],
			['Brazil', 4.1],
			['Bahamas', 8.2],
			['Bhutan', 2.4],
			['Bouvet Island', 1.4],
			['Botswana', 2.4],
			['Belarus', 6.9],
			['Belize', 2.1],
			['Canada', 13.1],
			['Cocos (Keeling) Islands', 1.0],
			['Central African Republic', 0.9],
			['CD', 1.0],
			['Congo', 1.0],
			['Switzerland', 16.7],
			['CI', 2.1],
			['Cook Islands', 2.7],
			['Chile', 6.1],
			['Cameroon', 1.7],
			['China', 4.1],
			['Colombia', 4.5],
			['Costa Rica', 3.4],
			['Former Czechoslovakia', 1.6],
			['Serbia', 8.5],
			['Cuba', 4.5],
			['Cape Verde', 6.4],
			['Christmas Island', 2.7],
			['Cyprus', 6.7],
			['Czech Republic', 15.9],
			['Germany', 12.9],
			['Djibouti', 1.8],
			['Denmark', 16.1],
			['Dominica', 11.9],
			['Dominican Republic', 2.8],
			['Algeria', 2.1],
			['Ecuador', 4.4],
			['Estonia', 11.0],
			['Egypt', 1.7],
			['Eritrea', 1.1],
			['Spain', 12.1],
			['Ethiopia', 2.2],
			['Finland', 16.6],
			['Fiji', 5.2],
			['Falkland Islands', 0.9],
			['Micronesia', 0.9],
			['Faroe Islands', 8.2],
			['France', 8.9],
			['Gabon', 1.7],
			['Great Britain', 13.9],
			['Grenada', 5.6],
			['Georgia', 8.4],
			['French Guyana', 3.4],
			['Ghana', 1.8],
			['Gibraltar', 8.7],
			['Greenland', 3.7],
			['Gambia', 1.6],
			['Guinea', 1.1],
			['Guadeloupe (French)', 4.3],
			['Equatorial Guinea', 1.3],
			['Greece', 7.3],
			['S. Georgia & S. Sandwich Isls.', 6.5],
			['Guatemala', 3.1],
			['Guam (USA)', 6.4],
			['Guinea Bissau', 0.6],
			['Guyana', 2.7],
			['Hong Kong', 16.8],
			['Honduras', 2.7],
			['Croatia', 6.4],
			['Haiti', 2.4],
			['Hungary', 12.6],
			['Indonesia', 3.9],
			['Ireland', 12.8],
			['Israel', 11.6],
			['India', 2.8],
			['British Indian Ocean Territory', 0.7],
			['Iraq', 3.7],
			['Iran', 2.0],
			['Iceland', 15.4],
			['Italy', 7.4],
			['Jamaica', 6.0],
			['Jordan', 3.3],
			['Japan', 17.4],
			['Kenya', 5.0],
			['Kyrgyzstan', 3.0],
			['Cambodia', 4.4],
			['Kiribati', 6.8],
			['Comoros', 0.9],
			['Saint Kitts & Nevis Anguilla', 4.5],
			['North Korea', 2.0],
			['South Korea', 26.7],
			['Kuwait', 4.6],
			['Cayman Islands', 6.2],
			['Kazakhstan', 6.4],
			['Laos', 2.4],
			['Lebanon', 1.8],
			['Saint Lucia', 3.2],
			['Liechtenstein', 11.3],
			['Sri Lanka', 4.8],
			['Liberia', 2.9],
			['Lesotho', 3.1],
			['Lithuania', 14.3],
			['Luxembourg', 9.9],
			['Latvia', 16.7],
			['Libya', 0.7],
			['Morocco', 3.7],
			['Monaco', 12.6],
			['Moldavia', 11.1],
			['Madagascar', 3.3],
			['Marshall Islands', 2.3],
			['Macedonia', 6.9],
			['Mali', 0.5],
			['Myanmar', 2.8],
			['Mongolia', 7.9],
			['Macau', 10.1],
			['Northern Mariana Islands', 2.2],
			['Martinique (French)', 5.2],
			['Mauritania', 1.2],
			['Montserrat', 6.9],
			['Malta', 11.8],
			['Mauritius', 3.5],
			['Maldives', 3.2],
			['Malawi', 1.7],
			['Mexico', 5.9],
			['Malaysia', 5.2],
			['Mozambique', 2.1],
			['Namibia', 2.0],
			['New Caledonia (French)', 4.8],
			['Niger', 0.8],
			['Norfolk Island', 1.7],
			['Nigeria', 2.7],
			['Nicaragua', 2.8],
			['Netherlands', 17.0],
			['Norway', 18.8],
			['Svalbard and Jan Mayen', 18.8],
			['Nepal', 2.0],
			['Nauru', 1.4],
			['Niue', 1.5],
			['New Zealand', 9.3],
			['Oman', 3.1],
			['Panama', 3.8],
			['Peru', 4.5],
			['Polynesia (French)', 1.9],
			['Papua New Guinea', 3.5],
			['Philippines', 3.2],
			['Pakistan', 2.1],
			['Poland', 11.0],
			['Saint Pierre and Miquelon', 6.9],
			['Pitcairn Island', 2.9],
			['Puerto Rico', 9.4],
			['Portugal', 12.1],
			['Palau', 2.2],
			['Paraguay', 1.6],
			['Qatar', 6.7],
			['Reunion (French)', 5.9],
			['Romania', 13.2],
			['Russia', 11.6],
			['Rwanda', 9.9],
			['Saudi Arabia', 3.4],
			['Solomon Islands', 0.7],
			['Seychelles', 2.9],
			['Sudan', 1.2],
			['SS', 1.2],
			['Sweden', 19.1],
			['Singapore', 13.9],
			['Saint Helena', 1.4],
			['Slovenia', 12.4],
			['Svalbard and Jan Mayen Islands', 2.7],
			['Slovakia', 12.5],
			['Sierra Leone', 2.0],
			['San Marino', 6.6],
			['Senegal', 1.8],
			['Somalia', 1.7],
			['Suriname', 2.4],
			['Saint Tome (Sao Tome) and Principe', 2.3],
			['El Salvador', 2.9],
			['Syria', 1.2],
			['Swaziland', 1.4],
			['Turks and Caicos Islands', 5.4],
			['Chad', 1.2],
			['Togo', 0.8],
			['Thailand', 9.3],
			['Tadjikistan', 3.9],
			['Tokelau', 4.8],
			['Turkmenistan', 2.5],
			['Tunisia', 3.1],
			['Tonga', 2.0],
			['Turkey', 6.3],
			['Trinidad and Tobago', 7.5],
			['Tuvalu', 1.8],
			['Taiwan', 12.9],
			['Tanzania', 2.2],
			['Ukraine', 11.2],
			['Uganda', 1.7],
			['United States', 14.2],
			['Uruguay', 6.2],
			['Uzbekistan', 2.5],
			['Vatican City State', 15.7],
			['Saint Vincent & Grenadines', 4.4],
			['Venezuela', 1.6],
			['Virgin Islands (British)', 3.9],
			['Virgin Islands (USA)', 6.1],
			['Vietnam', 3.8],
			['Vanuatu', 1.8],
			['Wallis and Futuna Islands', 4.2],
			['Samoa', 1.9],
			['Yemen', 1.0],
			['Mayotte', 3.3],
			['South Africa', 4.1],
			['Zambia', 1.4],
			['Zimbabwe', 4.0],
			['United Kingdom', 13.0]
		]);
		var options = {
			colorAxis: {colors: ['#ff0000', '#ffff1a', '#77b300']}
		};
		var chart = new google.visualization.GeoChart(document.getElementById('countries-map'));
		chart.draw(data, options);
	}
</script>

<style>
	#countries-map{width:100%;height:750px;overflow:hidden;}
	table.states tbody td,table.states thead th{text-align:right;}
	table.states thead th:first-of-type{text-align:left;}
	
	.countries-update-last-comparison-akamai tr td:first-of-type,.countries-update-last-comparison-cable tr td:first-of-type,.countries-update-last-comparison-akamai thead tr th:nth-of-type(2),.countries-update-last-comparison-cable thead tr th:nth-of-type(2),.countries-update-last tr td:first-of-type,.countries-update-last tr td:first-of-type,.countries-update-last thead tr th:nth-of-type(2),.countries-update-last thead tr th:nth-of-type(2){text-align:left;}
	
	.countries-update-last tr th:nth-of-type(6),.countries-update-last tr td:nth-of-type(5){border-left:30px solid #fff;text-align:left;font-weight:bold;}
	.countries-update-last .fa-angle-up{color:#69b731;font-size:18px;}
	.countries-update-last .fa-angle-down{color:#b73030;font-size:18px;}
	
	table.countries-2020 td:nth-of-type(1),table.countries-2020 thead th:nth-of-type(1),table.countries-2020 thead th:nth-of-type(2){text-align:left;}
	
	@media screen and (max-width:992px){
		.mtop{padding:30px 0 10px;}
		#countries-map{height:550px;}
		table.states tbody td,table.states thead th,table.states thead th:first-of-type{text-align:center;}
		table.countries td:nth-of-type(1):before{content:"Q3 2015 Avg. Mbps";}
		table.countries td:nth-of-type(2):before{content:"% Above 4 Mbps";}
		table.countries td:nth-of-type(3):before{content:"% Above 10 Mbps";}
		table.countries td:nth-of-type(4):before{content:"% Above 15 Mbps";}
		table.countries-update td:nth-of-type(1):before{content:"Q3 2016 Avg. Mbps";}
		table.countries-update td:nth-of-type(2):before{content:"YoY Change";}
		table.countries-update-bis td:nth-of-type(1):before{content:"Q1 2017 Avg. Mbps";}
		table.countries-update-bis td:nth-of-type(2):before{content:"YoY Change";}
		
		.countries-update-last-comparison-akamai tr td:first-of-type, .countries-update-last-comparison-cable tr td:first-of-type, .countries-update-last-comparison-akamai thead tr th:nth-of-type(2), .countries-update-last-comparison-cable thead tr th:nth-of-type(2), .countries-update-last tr td:first-of-type, .countries-update-last tr td:first-of-type, .countries-update-last thead tr th:nth-of-type(2), .countries-update-last thead tr th:nth-of-type(2){text-align:center;}
		table.countries-update-last-comparison-akamai td:nth-of-type(1):before,table.countries-update-last-comparison-cable td:nth-of-type(1):before{content:"Country";}
		table.countries-update-last-comparison-akamai td:nth-of-type(2):before,table.countries-update-last-comparison-cable td:nth-of-type(2):before{content:"Average Download Speed (Mbps)";}
		
		.countries-update-last tr th:nth-of-type(6),.countries-update-last tr td:nth-of-type(5){border:none;text-align:center;font-weight:normal;}
		table.countries-update-last td:nth-of-type(1):before{content:"Country";}
		table.countries-update-last td:nth-of-type(2):before{content:"Average Download Speed (Mbps)";}
		table.countries-update-last td:nth-of-type(3):before{content:"Total Tests";}
		table.countries-update-last td:nth-of-type(4):before{content:"Time To Download HD Movie (5GB)";}
		table.countries-update-last td:nth-of-type(5):before{content:"2017 Rank 2017";}
		table.countries-update-last td:nth-of-type(6):before{content:"Position Change 2017";}
		table.countries-update-last td:nth-of-type(7):before{content:"2017 Average Download Speed (Mbps)";}
		table.countries-update-last td:nth-of-type(8):before{content:"2017 Download Speed Change (Mbps)";}
		
		table.countries-2020 td:nth-of-type(1){display:none;}
		table.countries-2020 td:nth-of-type(2):before{content:"Download Speed (Mbps)";}
		table.countries-2020 td:nth-of-type(3):before{content:"Upload Speed (Mbps)";}
		table.countries-2020 td:nth-of-type(4):before{content:"# Download Tests";}
		table.countries-2020 td:nth-of-type(5):before{content:"# Upload Tests";}
		table.countries-2020 td:nth-of-type(6):before{content:"No. IPs";}
	}
	@media screen and (max-width:420px){
		#countries-map{height:320px;}
	}
</style>
	
</body>
</html>