/*
 * JQuery - Registration Form JS Functions
 * Created by: Emdad on 8/5/2017
 */


/* =========================================
 * Run init() on $(document).ready();
 * ========================================= */
$(function()
{
	init();
});



/* =========================================
 * Initializes other functions 
 * ========================================= */
function init()
{
	// Populate DOB drop-downs
	populateYear();
	populateMonth();
	populateDay();

	// Populate religion drop-down
	populateReligion();

	// Populate language drop-down
	populateMotherTongue();

	// Populate country drop-down
	populateCountry();
};



/* =========================================
 * Populates years (18-70 years) 
 * ========================================= */
function populateYear()
{
	var start = new Date().getFullYear() - 70;
	var end = new Date().getFullYear() - 18;
	var options = "";
	
	options += "<option selected hidden>Year</option>";

	for(var year = start ; year <= end; year++)
	{
		options += "<option>"+ year +"</option>";
	}
	
	document.getElementById("yob").innerHTML = options;
};



/* =========================================
 * Populates months (January - December) 
 * ========================================= */
function populateMonth()
{
	var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
	var options = "";
	
	options += "<option selected hidden>Month</option>";

	for(var m = 0 ; m <= 11; m++)
	{
		options += "<option>"+ months[m] +"</option>";
	}
	
	document.getElementById("mob").innerHTML = options;
};



/* =========================================
 * Populates days (1 - 31) 
 * ========================================= */
function populateDay()
{
	var start = 1;
	var end = 31;
	var options = "";
	
	options += "<option selected hidden>Day</option>";

	for(var day = start ; day <= end; day++)
	{
		options += "<option>"+ day +"</option>";
	}
	
	document.getElementById("dob").innerHTML = options;
};



/* =========================================
 * Populates religion drop-down 
 * ========================================= */
function populateReligion()
{
	var religions = ['Buddhist','Christian','Hindu','Jain','Jewish','Muslim','Parsi','Sikh','Spiritual','No Religion','Other']
	var options = "";
	
	options += "<option selected hidden>Select</option>";

	for(var r = 0 ; r <= religions.length-1; r++)
	{
		options += "<option>"+ religions[r] +"</option>";
	}
	
	document.getElementById("religion").innerHTML = options;
};



/* =========================================
 * Populates Country drop-down 
 * ========================================= */
function populateCountry()
{
	var countries = ['Afghanistan', 'Aland Islands', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia (Plurinational State of)', 'Bonaire, Sint Eustatius and Saba', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island', 'Brazil', 'British Indian Ocean Territory', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo (Democratic Republic of the)', 'Cook Islands', 'Costa Rica', 'Cote dIvoire', 'Croatia', 'Cuba', 'Curacao', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands (Malvinas)', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Heard Island and McDonald Islands', 'Holy See', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran (Islamic Republic of)', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jersey', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Korea (Democratic People\'s Republic of)', 'Korea (Republic of)', 'Kuwait', 'Kyrgyzstan', 'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macao', 'Macedonia (the former Yugoslav Republic of)', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia (Federated States of)', 'Moldova (Republic of)', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestine, State of', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Barthelemy', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin (French part)', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Sint Maarten (Dutch part)', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard and Jan Mayen', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic', 'Taiwan, Province of China[a]', 'Tajikistan', 'Tanzania, United Republic of', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom of Great Britain and Northern Ireland', 'United States of America', 'United States Minor Outlying Islands', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Venezuela (Bolivarian Republic of)', 'Viet Nam', 'Virgin Islands (British)', 'Virgin Islands (U.S.)', 'Wallis and Futuna', 'Western Sahara', 'Yemen', 'Zambia', 'Zimbabwe'];
	
	var options = "";
	
	options += "<option selected hidden>Select</option>";

	for(var c = 0 ; c <= countries.length-1; c++)
	{
		options += "<option>"+ countries[c] +"</option>";
	}
	
	document.getElementById("country").innerHTML = options;
};



/* =========================================
 * Populates Mother Tongue drop-down 
 * ========================================= */
function populateMotherTongue()
{
	var languages = ["English","Afar","Abkhazian","Afrikaans","Amharic","Arabic","Assamese","Aymara","Azerbaijani","Bashkir","Byelorussian","Bulgarian","Bihari","Bislama","Bengali/Bangla","Tibetan","Breton","Catalan","Corsican","Czech","Welsh","Danish","German","Bhutani","Greek","Esperanto","Spanish","Estonian","Basque","Persian","Finnish","Fiji","Faeroese","French","Frisian","Irish","Scots/Gaelic","Galician","Guarani","Gujarati","Hausa","Hindi","Croatian","Hungarian","Armenian","Interlingua","Interlingue","Inupiak","Indonesian","Icelandic","Italian","Hebrew","Japanese","Yiddish","Javanese","Georgian","Kazakh","Greenlandic","Cambodian","Kannada","Korean","Kashmiri","Kurdish","Kirghiz","Latin","Lingala","Laothian","Lithuanian","Latvian/Lettish","Malagasy","Maori","Macedonian","Malayalam","Mongolian","Moldavian","Marathi","Malay","Maltese","Burmese","Nauru","Nepali","Dutch","Norwegian","Occitan","(Afan)/Oromoor/Oriya","Punjabi","Polish","Pashto/Pushto","Portuguese","Quechua","Rhaeto-Romance","Kirundi","Romanian","Russian","Kinyarwanda","Sanskrit","Sindhi","Sangro","Serbo-Croatian","Singhalese","Slovak","Slovenian","Samoan","Shona","Somali","Albanian","Serbian","Siswati","Sesotho","Sundanese","Swedish","Swahili","Tamil","Tegulu","Tajik","Thai","Tigrinya","Turkmen","Tagalog","Setswana","Tonga","Turkish","Tsonga","Tatar","Twi","Ukrainian","Urdu","Uzbek","Vietnamese","Volapuk","Wolof","Xhosa","Yoruba","Chinese","Zulu"]

	var options = "";
	
	options += "<option selected hidden>Select</option>";

	for(var l = 0 ; l <= languages.length-1; l++)
	{
		options += "<option>"+ languages[l] +"</option>";
	}
	
	document.getElementById("mother_tongue").innerHTML = options;
};