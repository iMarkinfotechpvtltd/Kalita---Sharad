<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<?php wp_head(); ?>
	<!--PROJECT HTML HEAD SECTION-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
   
    <!-- Modernizr -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
    <header>
        <nav class="navbar navbar-default ">
            <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url();?>"><!--<img class="img-responsive" src="<?php //echo get_option_tree('logo_image');?>">-->
<svg x="0px" y="0px"
	  viewBox="0 0 318.91 413.521" enable-background="new 0 0 318.91 413.521"
	 xml:space="preserve">
<path display="none" fill="#FFFFFF" d="M131.541,934.322h1.932H131.541z"/>
<path fill="#5E5E5E" d="M43.948,371.563c7.269,0,11.042,3.865,11.042,3.865l-1.197,1.564c0,0-3.68-3.497-9.845-3.497
	c-7.959,0-13.848,6.441-13.848,14.722c0,8.327,5.751,14.721,13.71,14.721c6.901,0,11.041-5.29,11.041-5.29v-4.692
	c0-0.69-0.368-1.013-1.012-1.013h-1.978v-1.84h2.3c1.887,0,2.668,0.782,2.668,2.668v11.548h-1.978v-2.806
	c0-0.691,0.046-1.381,0.046-1.381h-0.092c0,0-3.864,4.739-10.995,4.739c-8.971,0-15.78-7.315-15.78-16.654
	C28.03,378.925,34.977,371.563,43.948,371.563"/>
<path fill="#5E5E5E" d="M63.863,384.077c0-0.69-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.669,0.781,2.669,2.53v1.61
	c0,1.058-0.093,1.886-0.093,1.886h0.093c1.15-3.542,3.634-6.21,7.268-6.21c0.691,0,1.335,0.137,1.335,0.137v1.933
	c0,0-0.553-0.092-1.058-0.092c-3.589,0-5.843,3.036-6.855,6.441c-0.506,1.609-0.69,3.312-0.69,4.83v9.937h-1.933V384.077z"/>
<path fill="#5E5E5E" d="M88.383,380.765c6.579,0,11.916,5.199,11.916,11.916c0,6.854-5.337,12.191-11.916,12.191
	s-11.915-5.337-11.915-12.191C76.468,385.963,81.804,380.765,88.383,380.765 M88.383,402.985c5.475,0,9.891-4.463,9.891-10.305
	c0-5.705-4.416-10.029-9.891-10.029c-5.475,0-9.891,4.324-9.891,10.029C78.492,398.522,82.908,402.985,88.383,402.985"/>
<path fill="#5E5E5E" d="M106.321,384.077c0-0.69-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.668,0.781,2.668,2.53
	v11.363c0,4.003,0.506,7.775,5.659,7.775c5.75,0,9.431-5.06,9.431-10.443v-11.225h1.932v20.242c0,0.69,0.368,1.012,1.012,1.012
	h1.978v1.748h-2.254c-1.886,0-2.668-0.782-2.668-2.53v-1.288c0-1.058,0.092-1.886,0.092-1.886h-0.092
	c-0.782,2.162-3.864,6.256-9.431,6.256c-5.659,0-7.591-3.128-7.591-8.971V384.077z"/>
<path fill="#5E5E5E" d="M133.46,384.078c0-0.691-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.669,0.781,2.669,2.53
	c0,1.058-0.047,1.84-0.047,1.84h0.092c0,0,1.794-4.923,8.189-4.923c6.165,0,9.937,4.923,9.937,12.054
	c0,7.315-4.278,12.053-10.213,12.053c-6.072,0-7.958-4.968-7.958-4.968H135.3c0,0,0.093,0.828,0.093,2.024v11.593h-1.933V384.078z
	 M143.352,403.031c4.509,0,8.189-3.772,8.189-10.213c0-6.211-3.312-10.167-8.005-10.167c-4.232,0-8.189,2.99-8.189,10.213
	C135.347,397.97,138.107,403.031,143.352,403.031"/>
<path fill="#5E5E5E" d="M168.882,380.765c6.256,0,9.384,4.922,9.384,10.489c0,0.506-0.091,1.242-0.091,1.242h-18.448
	c0,6.671,4.509,10.49,9.846,10.49c4.416,0,7.13-2.899,7.13-2.899l1.059,1.611c0,0-3.221,3.174-8.188,3.174
	c-6.487,0-11.87-4.693-11.87-12.007C157.702,385.09,162.993,380.765,168.882,380.765 M176.242,390.702
	c-0.229-5.612-3.588-8.143-7.406-8.143c-4.232,0-8.144,2.761-8.972,8.143H176.242z"/>
<polygon fill="#5E5E5E" points="195.651,402.479 198.596,402.479 198.596,373.956 195.651,373.956 195.651,372.116 203.519,372.116 
	203.519,373.956 200.574,373.956 200.574,402.479 203.519,402.479 203.519,404.319 195.651,404.319 "/>
<path fill="#5E5E5E" d="M210.878,373.956h-2.99v-1.84h12.882c9.568,0,16.056,5.888,16.056,16.101
	c0,10.26-6.487,16.102-16.056,16.102h-7.224c-1.886,0-2.668-0.782-2.668-2.668V373.956z M213.868,402.479h6.579
	c8.557,0,14.308-5.015,14.308-14.262c0-9.2-5.751-14.261-14.308-14.261h-7.591v27.511
	C212.856,402.157,213.224,402.479,213.868,402.479"/>
<path fill="#5E5E5E" d="M243.768,373.956h-2.99v-1.84h17.942c1.886,0,2.668,0.782,2.668,2.668v2.438h-1.933v-2.254
	c0-0.69-0.368-1.012-1.012-1.012h-12.697v13.203h12.834V389h-12.834v12.468c0,0.69,0.368,1.012,1.012,1.012h13.065
	c0.645,0,1.013-0.322,1.013-1.012v-2.254h1.932v2.438c0,1.886-0.782,2.668-2.668,2.668h-13.664c-1.886,0-2.668-0.782-2.668-2.668
	V373.956z"/>
<path fill="#5E5E5E" d="M275.232,387.297l-7.361-12.099c-0.689-1.105-1.563-1.242-2.484-1.242h-0.781v-1.841h0.781
	c2.301,0,3.221,0.369,4.601,2.669l4.555,7.591c0.919,1.564,2.116,3.588,2.116,3.588h0.092c0,0,0.966-2.024,1.933-3.588l4.601-7.591
	c1.38-2.3,2.3-2.669,4.6-2.669h0.783v1.841h-0.783c-0.92,0-1.794,0.137-2.483,1.242l-7.407,12.099l10.443,17.022h-2.347
	l-7.452-12.237c-0.967-1.611-2.07-3.451-2.07-3.451h-0.092c0,0-0.968,1.886-1.933,3.497l-7.36,12.191h-2.347L275.232,387.297z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FCD530" d="M149.438,55.042c-30.596,0-55.398,24.774-55.398,55.335
	s24.802,55.335,55.398,55.335s55.398-24.774,55.398-55.335S180.033,55.042,149.438,55.042"/>
<path fill="#5F5F5F" d="M8.581,253.172c0-1.98-1.056-2.904-2.904-2.904H0v-8.184h9.769c5.676,0,8.052,2.376,8.052,8.052v32.209
	H28.91c3.432,0,6.204-0.66,7.788-3.3l22.44-36.961h10.561l-23.893,38.941c-2.376,3.828-4.752,5.148-4.752,5.148v0.264
	c0,0,2.244,0.792,4.488,5.28l16.104,31.945c1.32,2.772,3.301,3.036,6.732,3.036h2.64v8.184h-4.883
	c-7.525,0-9.769-0.792-12.805-6.996l-16.896-33.925c-1.452-3.036-4.488-3.432-8.449-3.432H17.821v44.353h-9.24V253.172z"/>
<path fill="#5F5F5F" d="M118.273,293.961h3.696v-0.792c0-13.86-5.016-18.744-17.161-18.744c-3.3,0-12.936,0.924-12.936,5.808v4.224
	h-8.58v-6.336c0-9.241,15.84-11.221,21.648-11.221c20.989,0,26.005,11.221,26.005,25.477v31.813c0,1.98,1.056,2.904,2.904,2.904
	h5.544v7.788h-9.108c-5.676,0-7.92-2.508-7.92-7.92c0-2.904,0.132-4.884,0.132-4.884h-0.264c0.132,0-5.412,14.388-22.045,14.388
	c-11.088,0-22.572-6.468-22.572-19.668C77.617,294.753,106.789,293.961,118.273,293.961 M101.641,328.81
	c12.672,0,20.329-13.2,20.329-24.685v-3.036h-3.829c-10.428,0-31.284,0.264-31.284,15.181
	C86.856,322.474,91.74,328.81,101.641,328.81"/>
<path fill="#5F5F5F" d="M153.516,252.776c0-1.848-1.056-2.904-2.904-2.904h-5.544v-7.788h9.372c5.677,0,8.053,2.376,8.053,8.052
	v74.054c0,1.98,1.056,2.904,2.904,2.904h5.544v7.788h-9.372c-5.677,0-8.053-2.376-8.053-8.052V252.776z"/>
<path fill="#5F5F5F" d="M186.647,279.177c0-1.848-1.057-2.904-2.904-2.904h-5.545v-7.789h9.372c5.677,0,8.054,2.376,8.054,8.053
	v47.653c0,1.98,1.056,2.904,2.903,2.904h5.543v7.788h-9.372c-5.675,0-8.051-2.376-8.051-8.052V279.177z M186.383,242.084h8.713
	v11.353h-8.713V242.084z"/>
<path fill="#5F5F5F" d="M219.91,276.009h-8.712v-7.524h8.844v-18.349h8.845v18.349h16.631v7.524h-16.631v33.793
	c0,15.576,9.9,17.556,14.916,17.556c1.849,0,3.036-0.264,3.036-0.264v8.053c0,0-1.584,0.263-3.828,0.263
	c-7.656,0-23.101-2.507-23.101-24.684V276.009z"/>
<path fill="#5F5F5F" d="M297.79,293.961h3.696v-0.792c0-13.86-5.017-18.744-17.161-18.744c-3.3,0-12.938,0.924-12.938,5.808v4.224
	h-8.58v-6.336c0-9.241,15.842-11.221,21.649-11.221c20.989,0,26.005,11.221,26.005,25.477v31.813c0,1.98,1.057,2.904,2.904,2.904
	h5.544v7.788h-9.108c-5.676,0-7.92-2.508-7.92-7.92c0-2.904,0.131-4.884,0.131-4.884h-0.263c0.132,0-5.412,14.388-22.045,14.388
	c-11.088,0-22.572-6.468-22.572-19.668C257.133,294.753,286.305,293.961,297.79,293.961 M281.157,328.81
	c12.673,0,20.329-13.2,20.329-24.685v-3.036h-3.828c-10.429,0-31.285,0.264-31.285,15.181
	C266.373,322.474,271.257,328.81,281.157,328.81"/>
<g>
	<defs>
		<path id="SVGID_1_" d="M128.086,47.945c0,0-25.583,7.918-38.166,37.168c0,0-10.721,21.833-0.111,48.666
			c0,0,6.444,21.917,32.027,35.083c0,0-22.249-11.999-29.833-32.666c0,0-8-18.333-3.917-35.834c0,0,3.667-18.166,14-29.666
			c0,0,11.584-12.667,22.584-16.833c0,0,14.916-7.917,36.082-4.417c0,0,12.834,1.583,23.417,9.25c0,0,11.834,7.249,18.251,18.417
			c0,0,10,13.999,9.499,33.583c0,0,0.25,13.917-6.083,25.75c0,0-6.167,15.25-22.25,24.917l5.167,8.011
			c0,0,13.25-8.178,21.417-22.678c0,0,6.333-11.25,7.583-18.667c0,0,2.833-13.416,1.833-20.999c0,0-0.416-20.334-14.083-37
			c0,0-12.75-17.501-33.834-23.501c0,0-8.152-2.913-19.857-2.913C144.84,43.615,136.61,44.648,128.086,47.945"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<defs>
		<filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="79.199" y="43.615" width="141.387" height="125.759">
			<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
		</filter>
	</defs>
	<mask maskUnits="userSpaceOnUse" x="79.199" y="43.615" width="141.387" height="125.759" id="SVGID_3_">
		<g filter="url(#Adobe_OpacityMaskFilter)">
			
				<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-195.7793" y1="980.9351" x2="-194.7793" y2="980.9351" gradientTransform="matrix(134.6778 0 0 -134.6778 26452.2285 132216.6563)">
				<stop  offset="0" style="stop-color:#CCCCCC"/>
				<stop  offset="0.0049" style="stop-color:#CCCCCC"/>
				<stop  offset="0.0373" style="stop-color:#DADADA"/>
				<stop  offset="0.0932" style="stop-color:#EBEBEB"/>
				<stop  offset="0.1629" style="stop-color:#F6F6F6"/>
				<stop  offset="0.2606" style="stop-color:#FDFDFD"/>
				<stop  offset="0.532" style="stop-color:#FFFFFF"/>
				<stop  offset="1" style="stop-color:#FFFFFF"/>
			</linearGradient>
			<rect x="79.199" y="43.615" clip-path="url(#SVGID_2_)" fill="url(#SVGID_4_)" width="141.387" height="125.759"/>
		</g>
	</mask>
	
		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="-195.7793" y1="980.9351" x2="-194.7793" y2="980.9351" gradientTransform="matrix(134.6778 0 0 -134.6778 26452.2285 132216.6563)">
		<stop  offset="0" style="stop-color:#F8E491"/>
		<stop  offset="0.0049" style="stop-color:#F8E491"/>
		<stop  offset="0.0537" style="stop-color:#F8DF8C"/>
		<stop  offset="0.1815" style="stop-color:#F9D885"/>
		<stop  offset="0.532" style="stop-color:#F9D683"/>
		<stop  offset="1" style="stop-color:#F7C270"/>
	</linearGradient>
	
		<rect x="79.199" y="43.615" clip-path="url(#SVGID_2_)" mask="url(#SVGID_3_)" fill="url(#SVGID_5_)" width="141.387" height="125.759"/>
</g>
<path fill="#F8E492" d="M79.812,177.564c-0.673,1.077-1.384,2.123-2.135,3.136c-0.75,1.016-1.72,2.131-2.913,3.343
	c-2.009,1.97-3.978,3.388-5.905,4.258c-1.925,0.868-3.765,1.024-5.517,0.462c-1.751-0.56-3.024-1.723-3.821-3.489
	c-1.086-2.406-0.207-5.385,2.635-8.937c2.842-3.55,6.792-6.469,11.849-8.752l15.894-7.174L79.812,177.564z"/>
<path fill="#F8DF8D" d="M56.333,114.81c-1.237,0.288-2.479,0.525-3.727,0.712c-1.248,0.189-2.721,0.291-4.422,0.308
	c-2.814-0.024-5.211-0.412-7.188-1.157c-1.977-0.745-3.389-1.934-4.231-3.57c-0.845-1.633-0.925-3.356-0.242-5.168
	c0.931-2.471,3.659-3.958,8.178-4.465c4.52-0.506,9.378,0.218,14.57,2.175l16.318,6.149L56.333,114.81z"/>
<path fill="#F8DA88" d="M77.683,51.918c-1.139-0.564-2.249-1.168-3.331-1.817c-1.084-0.646-2.289-1.502-3.612-2.57
	c-2.159-1.805-3.765-3.626-4.819-5.457c-1.054-1.831-1.39-3.646-1.003-5.445c0.386-1.798,1.418-3.18,3.096-4.147
	c2.288-1.317,5.339-0.734,9.153,1.744c3.812,2.479,7.106,6.123,9.875,10.93l8.702,15.113L77.683,51.918z"/>
<path fill="#F8D583" d="M133.06,21.446c-0.587-1.125-1.129-2.268-1.624-3.429c-0.494-1.161-0.965-2.561-1.406-4.204
	c-0.683-2.731-0.908-5.146-0.683-7.248c0.226-2.1,1.024-3.765,2.395-4.992c1.369-1.226,3.017-1.735,4.944-1.528
	c2.624,0.281,4.748,2.548,6.372,6.797c1.622,4.248,2.14,9.132,1.548,14.647l-1.861,17.339L133.06,21.446z"/>
<path fill="#F8C16F" d="M212.779,162.828l16.905,4.281c5.378,1.362,9.779,3.544,13.198,6.542c3.419,3,4.807,5.779,4.158,8.338
	c-0.475,1.877-1.525,3.245-3.151,4.104c-1.626,0.86-3.465,1.029-5.513,0.51c-2.049-0.519-4.235-1.571-6.559-3.159
	c-1.387-0.985-2.537-1.913-3.453-2.781c-0.918-0.866-1.801-1.77-2.651-2.713L212.779,162.828z"/>
<path fill="#F8C674" d="M230.292,119.874l16.317-6.149c5.191-1.956,10.051-2.68,14.57-2.175c4.52,0.507,7.246,1.994,8.177,4.465
	c0.684,1.812,0.604,3.536-0.24,5.169c-0.844,1.635-2.255,2.824-4.231,3.569c-1.979,0.746-4.373,1.133-7.188,1.157
	c-1.701-0.015-3.176-0.119-4.424-0.308c-1.246-0.187-2.488-0.424-3.726-0.711L230.292,119.874z"/>
<path fill="#F8CB79" d="M221.455,76.043l11.718-12.915c3.728-4.108,7.721-6.968,11.975-8.579c4.254-1.61,7.359-1.53,9.313,0.244
	c1.436,1.301,2.149,2.872,2.143,4.709c-0.004,1.841-0.718,3.543-2.137,5.107c-1.42,1.566-3.376,3.003-5.869,4.308
	c-1.521,0.762-2.88,1.341-4.076,1.743c-1.196,0.403-2.41,0.758-3.642,1.066L221.455,76.043z"/>
<path fill="#F8D07E" d="M192.063,45.705l2.233-17.294c0.711-5.503,2.354-10.132,4.922-13.885c2.57-3.753,5.164-5.462,7.782-5.124
	c1.921,0.249,3.404,1.129,4.45,2.64c1.048,1.513,1.436,3.318,1.165,5.413c-0.271,2.097-1.055,4.393-2.354,6.889
	c-0.812,1.494-1.596,2.747-2.349,3.76c-0.751,1.014-1.544,1.998-2.378,2.956L192.063,45.705z"/>
</svg>

<svg x="0px" y="0px"
	 viewBox="0 0 318.91 413.521" enable-background="new 0 0 318.91 413.521"
	 xml:space="preserve">
<path display="none" fill="#FFFFFF" d="M131.541,934.322h1.932H131.541z"/>
<path fill="#FFFFFF" d="M43.948,371.563c7.269,0,11.042,3.865,11.042,3.865l-1.197,1.564c0,0-3.68-3.497-9.845-3.497
	c-7.959,0-13.848,6.441-13.848,14.722c0,8.327,5.751,14.721,13.71,14.721c6.901,0,11.041-5.29,11.041-5.29v-4.692
	c0-0.69-0.368-1.013-1.012-1.013h-1.978v-1.84h2.3c1.887,0,2.668,0.782,2.668,2.668v11.548h-1.978v-2.806
	c0-0.691,0.046-1.381,0.046-1.381h-0.092c0,0-3.864,4.739-10.995,4.739c-8.971,0-15.78-7.315-15.78-16.654
	C28.03,378.925,34.977,371.563,43.948,371.563"/>
<path fill="#FFFFFF" d="M63.863,384.077c0-0.69-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.669,0.781,2.669,2.53v1.61
	c0,1.058-0.093,1.886-0.093,1.886h0.093c1.15-3.542,3.634-6.21,7.268-6.21c0.691,0,1.335,0.137,1.335,0.137v1.933
	c0,0-0.553-0.092-1.058-0.092c-3.589,0-5.843,3.036-6.855,6.441c-0.506,1.609-0.69,3.312-0.69,4.83v9.937h-1.933V384.077z"/>
<path fill="#FFFFFF" d="M88.383,380.765c6.579,0,11.916,5.199,11.916,11.916c0,6.854-5.337,12.191-11.916,12.191
	s-11.915-5.337-11.915-12.191C76.468,385.963,81.804,380.765,88.383,380.765 M88.383,402.985c5.475,0,9.891-4.463,9.891-10.305
	c0-5.705-4.416-10.029-9.891-10.029c-5.475,0-9.891,4.324-9.891,10.029C78.492,398.522,82.908,402.985,88.383,402.985"/>
<path fill="#FFFFFF" d="M106.321,384.077c0-0.69-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.668,0.781,2.668,2.53
	v11.363c0,4.003,0.506,7.775,5.659,7.775c5.75,0,9.431-5.06,9.431-10.443v-11.225h1.932v20.242c0,0.69,0.368,1.012,1.012,1.012
	h1.978v1.748h-2.254c-1.886,0-2.668-0.782-2.668-2.53v-1.288c0-1.058,0.092-1.886,0.092-1.886h-0.092
	c-0.782,2.162-3.864,6.256-9.431,6.256c-5.659,0-7.591-3.128-7.591-8.971V384.077z"/>
<path fill="#FFFFFF" d="M133.46,384.078c0-0.691-0.368-1.012-1.012-1.012h-1.978v-1.748h2.254c1.886,0,2.669,0.781,2.669,2.53
	c0,1.058-0.047,1.84-0.047,1.84h0.092c0,0,1.794-4.923,8.189-4.923c6.165,0,9.937,4.923,9.937,12.054
	c0,7.315-4.278,12.053-10.213,12.053c-6.072,0-7.958-4.968-7.958-4.968H135.3c0,0,0.093,0.828,0.093,2.024v11.593h-1.933V384.078z
	 M143.352,403.031c4.509,0,8.189-3.772,8.189-10.213c0-6.211-3.312-10.167-8.005-10.167c-4.232,0-8.189,2.99-8.189,10.213
	C135.347,397.97,138.107,403.031,143.352,403.031"/>
<path fill="#FFFFFF" d="M168.882,380.765c6.256,0,9.384,4.922,9.384,10.489c0,0.506-0.091,1.242-0.091,1.242h-18.448
	c0,6.671,4.509,10.49,9.846,10.49c4.416,0,7.13-2.899,7.13-2.899l1.059,1.611c0,0-3.221,3.174-8.188,3.174
	c-6.487,0-11.87-4.693-11.87-12.007C157.702,385.09,162.993,380.765,168.882,380.765 M176.242,390.702
	c-0.229-5.612-3.588-8.143-7.406-8.143c-4.232,0-8.144,2.761-8.972,8.143H176.242z"/>
<polygon fill="#FFFFFF" points="195.651,402.479 198.596,402.479 198.596,373.956 195.651,373.956 195.651,372.116 203.519,372.116 
	203.519,373.956 200.574,373.956 200.574,402.479 203.519,402.479 203.519,404.319 195.651,404.319 "/>
<path fill="#FFFFFF" d="M210.878,373.956h-2.99v-1.84h12.882c9.568,0,16.056,5.888,16.056,16.101
	c0,10.26-6.487,16.102-16.056,16.102h-7.224c-1.886,0-2.668-0.782-2.668-2.668V373.956z M213.868,402.479h6.579
	c8.557,0,14.308-5.015,14.308-14.262c0-9.2-5.751-14.261-14.308-14.261h-7.591v27.511
	C212.856,402.157,213.224,402.479,213.868,402.479"/>
<path fill="#FFFFFF" d="M243.768,373.956h-2.99v-1.84h17.942c1.886,0,2.668,0.782,2.668,2.668v2.438h-1.933v-2.254
	c0-0.69-0.368-1.012-1.012-1.012h-12.697v13.203h12.834V389h-12.834v12.468c0,0.69,0.368,1.012,1.012,1.012h13.065
	c0.645,0,1.013-0.322,1.013-1.012v-2.254h1.932v2.438c0,1.886-0.782,2.668-2.668,2.668h-13.664c-1.886,0-2.668-0.782-2.668-2.668
	V373.956z"/>
<path fill="#FFFFFF" d="M275.232,387.297l-7.361-12.099c-0.689-1.105-1.563-1.242-2.484-1.242h-0.781v-1.841h0.781
	c2.301,0,3.221,0.369,4.601,2.669l4.555,7.591c0.919,1.564,2.116,3.588,2.116,3.588h0.092c0,0,0.966-2.024,1.933-3.588l4.601-7.591
	c1.38-2.3,2.3-2.669,4.6-2.669h0.783v1.841h-0.783c-0.92,0-1.794,0.137-2.483,1.242l-7.407,12.099l10.443,17.022h-2.347
	l-7.452-12.237c-0.967-1.611-2.07-3.451-2.07-3.451h-0.092c0,0-0.968,1.886-1.933,3.497l-7.36,12.191h-2.347L275.232,387.297z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M149.438,55.042c-30.596,0-55.398,24.774-55.398,55.335
	s24.802,55.335,55.398,55.335s55.398-24.774,55.398-55.335S180.033,55.042,149.438,55.042"/>
<path fill="#FFFFFF" d="M8.581,253.172c0-1.98-1.056-2.904-2.904-2.904H0v-8.184h9.769c5.676,0,8.052,2.376,8.052,8.052v32.209
	H28.91c3.432,0,6.204-0.66,7.788-3.3l22.44-36.961h10.561l-23.893,38.941c-2.376,3.828-4.752,5.148-4.752,5.148v0.264
	c0,0,2.244,0.792,4.488,5.28l16.104,31.945c1.32,2.772,3.301,3.036,6.732,3.036h2.64v8.184h-4.883
	c-7.525,0-9.769-0.792-12.805-6.996l-16.896-33.925c-1.452-3.036-4.488-3.432-8.449-3.432H17.821v44.353h-9.24V253.172z"/>
<path fill="#FFFFFF" d="M118.273,293.961h3.696v-0.792c0-13.86-5.016-18.744-17.161-18.744c-3.3,0-12.936,0.924-12.936,5.808v4.224
	h-8.58v-6.336c0-9.241,15.84-11.221,21.648-11.221c20.989,0,26.005,11.221,26.005,25.477v31.813c0,1.98,1.056,2.904,2.904,2.904
	h5.544v7.788h-9.108c-5.676,0-7.92-2.508-7.92-7.92c0-2.904,0.132-4.884,0.132-4.884h-0.264c0.132,0-5.412,14.388-22.045,14.388
	c-11.088,0-22.572-6.468-22.572-19.668C77.617,294.753,106.789,293.961,118.273,293.961 M101.641,328.81
	c12.672,0,20.329-13.2,20.329-24.685v-3.036h-3.829c-10.428,0-31.284,0.264-31.284,15.181
	C86.856,322.474,91.74,328.81,101.641,328.81"/>
<path fill="#FFFFFF" d="M153.516,252.776c0-1.848-1.056-2.904-2.904-2.904h-5.544v-7.788h9.372c5.677,0,8.053,2.376,8.053,8.052
	v74.054c0,1.98,1.056,2.904,2.904,2.904h5.544v7.788h-9.372c-5.677,0-8.053-2.376-8.053-8.052V252.776z"/>
<path fill="#FFFFFF" d="M186.647,279.177c0-1.848-1.057-2.904-2.904-2.904h-5.545v-7.789h9.372c5.677,0,8.054,2.376,8.054,8.053
	v47.653c0,1.98,1.056,2.904,2.903,2.904h5.543v7.788h-9.372c-5.675,0-8.051-2.376-8.051-8.052V279.177z M186.383,242.084h8.713
	v11.353h-8.713V242.084z"/>
<path fill="#FFFFFF" d="M219.91,276.009h-8.712v-7.524h8.844v-18.349h8.845v18.349h16.631v7.524h-16.631v33.793
	c0,15.576,9.9,17.556,14.916,17.556c1.849,0,3.036-0.264,3.036-0.264v8.053c0,0-1.584,0.263-3.828,0.263
	c-7.656,0-23.101-2.507-23.101-24.684V276.009z"/>
<path fill="#FFFFFF" d="M297.79,293.961h3.696v-0.792c0-13.86-5.017-18.744-17.161-18.744c-3.3,0-12.938,0.924-12.938,5.808v4.224
	h-8.58v-6.336c0-9.241,15.842-11.221,21.649-11.221c20.989,0,26.005,11.221,26.005,25.477v31.813c0,1.98,1.057,2.904,2.904,2.904
	h5.544v7.788h-9.108c-5.676,0-7.92-2.508-7.92-7.92c0-2.904,0.131-4.884,0.131-4.884h-0.263c0.132,0-5.412,14.388-22.045,14.388
	c-11.088,0-22.572-6.468-22.572-19.668C257.133,294.753,286.305,293.961,297.79,293.961 M281.157,328.81
	c12.673,0,20.329-13.2,20.329-24.685v-3.036h-3.828c-10.429,0-31.285,0.264-31.285,15.181
	C266.373,322.474,271.257,328.81,281.157,328.81"/>
<g>
	<defs>
		<path id="SVGID_1_" d="M128.086,47.945c0,0-25.583,7.918-38.166,37.168c0,0-10.721,21.833-0.111,48.666
			c0,0,6.444,21.917,32.027,35.083c0,0-22.249-11.999-29.833-32.666c0,0-8-18.333-3.917-35.834c0,0,3.667-18.166,14-29.666
			c0,0,11.584-12.667,22.584-16.833c0,0,14.916-7.917,36.082-4.417c0,0,12.834,1.583,23.417,9.25c0,0,11.834,7.249,18.251,18.417
			c0,0,10,13.999,9.499,33.583c0,0,0.25,13.917-6.083,25.75c0,0-6.167,15.25-22.25,24.917l5.167,8.011
			c0,0,13.25-8.178,21.417-22.678c0,0,6.333-11.25,7.583-18.667c0,0,2.833-13.416,1.833-20.999c0,0-0.416-20.334-14.083-37
			c0,0-12.75-17.501-33.834-23.501c0,0-8.152-2.913-19.857-2.913C144.84,43.615,136.61,44.648,128.086,47.945"/>
	</defs>
	<use xlink:href="#SVGID_1_"  overflow="visible" fill="#FFFFFF"/>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<defs>
		<filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="79.199" y="43.615" width="141.387" height="125.759">
			<feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
		</filter>
	</defs>
	<mask maskUnits="userSpaceOnUse" x="79.199" y="43.615" width="141.387" height="125.759" id="SVGID_3_">
		<g filter="url(#Adobe_OpacityMaskFilter)">
			
				<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-195.7793" y1="980.9351" x2="-194.7793" y2="980.9351" gradientTransform="matrix(134.6778 0 0 -134.6778 26452.2285 132216.6563)">
				<stop  offset="0" style="stop-color:#CCCCCC"/>
				<stop  offset="0.0049" style="stop-color:#CCCCCC"/>
				<stop  offset="0.0373" style="stop-color:#DADADA"/>
				<stop  offset="0.0932" style="stop-color:#EBEBEB"/>
				<stop  offset="0.1629" style="stop-color:#F6F6F6"/>
				<stop  offset="0.2606" style="stop-color:#FDFDFD"/>
				<stop  offset="0.532" style="stop-color:#FFFFFF"/>
				<stop  offset="1" style="stop-color:#FFFFFF"/>
			</linearGradient>
			<rect x="79.199" y="43.615" clip-path="url(#SVGID_2_)" fill="url(#SVGID_4_)" width="141.387" height="125.759"/>
		</g>
	</mask>
	<rect x="79.199" y="43.615" clip-path="url(#SVGID_2_)" mask="url(#SVGID_3_)" fill="#FFFFFF" width="141.387" height="125.759"/>
</g>
<path fill="#FFFFFF" d="M79.812,177.564c-0.673,1.077-1.384,2.123-2.135,3.136c-0.75,1.016-1.72,2.131-2.913,3.343
	c-2.009,1.97-3.978,3.388-5.905,4.258c-1.925,0.868-3.765,1.024-5.517,0.462c-1.751-0.56-3.024-1.723-3.821-3.489
	c-1.086-2.406-0.207-5.385,2.635-8.937c2.842-3.55,6.792-6.469,11.849-8.752l15.894-7.174L79.812,177.564z"/>
<path fill="#FFFFFF" d="M56.333,114.81c-1.237,0.288-2.479,0.525-3.727,0.712c-1.248,0.189-2.721,0.291-4.422,0.308
	c-2.814-0.024-5.211-0.412-7.188-1.157c-1.977-0.745-3.389-1.934-4.231-3.57c-0.845-1.633-0.925-3.356-0.242-5.168
	c0.931-2.471,3.659-3.958,8.178-4.465c4.52-0.506,9.378,0.218,14.57,2.175l16.318,6.149L56.333,114.81z"/>
<path fill="#FFFFFF" d="M77.683,51.918c-1.139-0.564-2.249-1.168-3.331-1.817c-1.084-0.646-2.289-1.502-3.612-2.57
	c-2.159-1.805-3.765-3.626-4.819-5.457c-1.054-1.831-1.39-3.646-1.003-5.445c0.386-1.798,1.418-3.18,3.096-4.147
	c2.288-1.317,5.339-0.734,9.153,1.744c3.812,2.479,7.106,6.123,9.875,10.93l8.702,15.113L77.683,51.918z"/>
<path fill="#FFFFFF" d="M133.06,21.446c-0.587-1.125-1.129-2.268-1.624-3.429c-0.494-1.161-0.965-2.561-1.406-4.204
	c-0.683-2.731-0.908-5.146-0.683-7.248c0.226-2.1,1.024-3.765,2.395-4.992c1.369-1.226,3.017-1.735,4.944-1.528
	c2.624,0.281,4.748,2.548,6.372,6.797c1.622,4.248,2.14,9.132,1.548,14.647l-1.861,17.339L133.06,21.446z"/>
<path fill="#FFFFFF" d="M212.779,162.828l16.905,4.281c5.378,1.362,9.779,3.544,13.198,6.542c3.419,3,4.807,5.779,4.158,8.338
	c-0.475,1.877-1.525,3.245-3.151,4.104c-1.626,0.86-3.465,1.029-5.513,0.51c-2.049-0.519-4.235-1.571-6.559-3.159
	c-1.387-0.985-2.537-1.913-3.453-2.781c-0.918-0.866-1.801-1.77-2.651-2.713L212.779,162.828z"/>
<path fill="#FFFFFF" d="M230.292,119.874l16.317-6.149c5.191-1.956,10.051-2.68,14.57-2.175c4.52,0.507,7.246,1.994,8.177,4.465
	c0.684,1.812,0.604,3.536-0.24,5.169c-0.844,1.635-2.255,2.824-4.231,3.569c-1.979,0.746-4.373,1.133-7.188,1.157
	c-1.701-0.015-3.176-0.119-4.424-0.308c-1.246-0.187-2.488-0.424-3.726-0.711L230.292,119.874z"/>
<path fill="#FFFFFF" d="M221.455,76.043l11.718-12.915c3.728-4.108,7.721-6.968,11.975-8.579c4.254-1.61,7.359-1.53,9.313,0.244
	c1.436,1.301,2.149,2.872,2.143,4.709c-0.004,1.841-0.718,3.543-2.137,5.107c-1.42,1.566-3.376,3.003-5.869,4.308
	c-1.521,0.762-2.88,1.341-4.076,1.743c-1.196,0.403-2.41,0.758-3.642,1.066L221.455,76.043z"/>
<path fill="#FFFFFF" d="M192.063,45.705l2.233-17.294c0.711-5.503,2.354-10.132,4.922-13.885c2.57-3.753,5.164-5.462,7.782-5.124
	c1.921,0.249,3.404,1.129,4.45,2.64c1.048,1.513,1.436,3.318,1.165,5.413c-0.271,2.097-1.055,4.393-2.354,6.889
	c-0.812,1.494-1.596,2.747-2.349,3.76c-0.751,1.014-1.544,1.998-2.378,2.956L192.063,45.705z"/>
</svg>


                </a>
                
                
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
           <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="social-links">
                    <li><a href="<?php echo get_option_tree('twitter');?>" class="btn-social"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="<?php echo get_option_tree('facebook');?>" class="btn-social"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo get_option_tree('google_plus');?>" class="btn-social"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                 
					<!--START CODE USE FOR GETTING HEADER MENU-->
					<?php
						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'Header_menu',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => ''
						);

						wp_nav_menu( $defaults );
				?>
				<!--END OF CODE USE FOR GETTING HEADER MENU-->	  
				</ul>
               <a href="<?php echo site_url()?>/contact" class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i><span>Nous contacter</span></a>
     </div> 
    </nav>
    </header>
                                                                                                                                      