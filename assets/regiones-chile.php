<?php

function rdcw_regiones_de_chile($states) {
	$states['CL'] = array(
		"" => "Seleccione Región",
		'Antofagasta' => 'Antofagasta',
		'Araucanía' => 'Araucanía',
		'Arica y Parinacota' => 'Arica y Parinacota',
		'Atacama' => 'Atacama',
		'Aysén del General Carlos Ibáñez del Campo' => 'Aysén del General Carlos Ibáñez del Campo',
		'Biobío' => 'Biobío',
		'Coquimbo' => 'Coquimbo',
		'Libertador General Bernardo O’Higgins' => 'Libertador General Bernardo O’Higgins',
		'Los Lagos' => 'Los Lagos',
		'Los Ríos' => 'Los Ríos',
		'Magallanes y la Antártica Chilena' => 'Magallanes y la Antártica Chilena',
		'Maule' => 'Maule',
		'Metropolitana de Santiago' => 'Metropolitana de Santiago',
		'Ñuble' => 'Ñuble',
		'Tarapacá' => 'Tarapacá',
		'Valparaíso' => 'Valparaíso',
	);

	return $states;
}
/**/
function ciudades_chilenas( $fields ) {
	$city_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
			"" =>"Seleccione Comuna",
			"Arica"=>"Arica",
			"Camarones"=>"Camarones",
			"General Lagos"=>"General Lagos",
			"Putre"=>"Putre",
			"Alto Hospicio"=>"Alto Hospicio",
			"Iquique"=>"Iquique",
			"Camina"=>"Camina",
			"Colchane"=>"Colchane",
			"Huara"=>"Huara",
			"Pica"=>"Pica",
			"Pozo Almonte"=>"Pozo Almonte",
			"Antofagasta"=>"Antofagasta",
			"Mejillones"=>"Mejillones",
			"Sierra Gorda"=>"Sierra Gorda",
			"Taltal"=>"Taltal",
			"Calama"=>"Calama",
			"Ollague"=>"Ollague",
			"San Pedro de Atacama"=>"San Pedro de Atacama",
			"Maria Elena"=>"Maria Elena",
			"Tocopilla"=>"Tocopilla",
			"Chanaral"=>"Chanaral",
			"Diego de Almagro"=>"Diego de Almagro",
			"Caldera"=>"Caldera",
			"Copiapo"=>"Copiapo",
			"Tierra Amarilla"=>"Tierra Amarilla",
			"Alto del Carmen"=>"Alto del Carmen",
			"Freirina"=>"Freirina",
			"Huasco"=>"Huasco",
			"Vallenar"=>"Vallenar",
			"Canela"=>"Canela",
			"Illapel"=>"Illapel",
			"Los Vilos"=>"Los Vilos",
			"Salamanca"=>"Salamanca",
			"Andacollo"=>"Andacollo",
			"Coquimbo"=>"Coquimbo",
			"La Higuera"=>"La Higuera",
			"La Serena"=>"La Serena",
			"Paihuaco"=>"Paihuaco",
			"Vicuna"=>"Vicuna",
			"Combarbala"=>"Combarbala",
			"Monte Patria"=>"Monte Patria",
			"Ovalle"=>"Ovalle",
			"Punitaqui"=>"Punitaqui",
			"Rio Hurtado"=>"Rio Hurtado",
			"Isla de Pascua"=>"Isla de Pascua",
			"Calle Larga"=>"Calle Larga",
			"Los Andes"=>"Los Andes",
			"Rinconada"=>"Rinconada",
			"San Esteban"=>"San Esteban",
			"La Ligua"=>"La Ligua",
			"Papudo"=>"Papudo",
			"Petorca"=>"Petorca",
			"Zapallar"=>"Zapallar",
			"Hijuelas"=>"Hijuelas",
			"La Calera"=>"La Calera",
			"La Cruz"=>"La Cruz",
			"Limache"=>"Limache",
			"Nogales"=>"Nogales",
			"Olmue"=>"Olmue",
			"Quillota"=>"Quillota",
			"Algarrobo"=>"Algarrobo",
			"Cartagena"=>"Cartagena",
			"El Quisco"=>"El Quisco",
			"El Tabo"=>"El Tabo",
			"San Antonio"=>"San Antonio",
			"Santo Domingo"=>"Santo Domingo",
			"Catemu"=>"Catemu",
			"Llaillay"=>"Llaillay",
			"Panquehue"=>"Panquehue",
			"Putaendo"=>"Putaendo",
			"San Felipe"=>"San Felipe",
			"Santa Maria"=>"Santa Maria",
			"Casablanca"=>"Casablanca",
			"Concon"=>"Concon",
			"Juan Fernandez"=>"Juan Fernandez",
			"Puchuncavi"=>"Puchuncavi",
			"Quilpue"=>"Quilpue",
			"Quintero"=>"Quintero",
			"Valparaiso"=>"Valparaiso",
			"Villa Alemana"=>"Villa Alemana",
			"Vina del Mar"=>"Vina del Mar",
			"Colina"=>"Colina",
			"Lampa"=>"Lampa",
			"Tiltil"=>"Tiltil",
			"Pirque"=>"Pirque",
			"Puente Alto"=>"Puente Alto",
			"San Jose de Maipo"=>"San Jose de Maipo",
			"Buin"=>"Buin",
			"Calera de Tango"=>"Calera de Tango",
			"Paine"=>"Paine",
			"San Bernardo"=>"San Bernardo",
			"Alhue"=>"Alhue",
			"Curacavi"=>"Curacavi",
			"Maria Pinto"=>"Maria Pinto",
			"Melipilla"=>"Melipilla",
			"San Pedro"=>"San Pedro",
			"Cerrillos"=>"Cerrillos",
			"Cerro Navia"=>"Cerro Navia",
			"Conchali"=>"Conchali",
			"El Bosque"=>"El Bosque",
			"Estacion Central"=>"Estacion Central",
			"Huechuraba"=>"Huechuraba",
			"Independencia"=>"Independencia",
			"La Cisterna"=>"La Cisterna",
			"La Granja"=>"La Granja",
			"La Florida"=>"La Florida",
			"La Pintana"=>"La Pintana",
			"La Reina"=>"La Reina",
			"Las Condes"=>"Las Condes",
			"Lo Barnechea"=>"Lo Barnechea",
			"Lo Espejo"=>"Lo Espejo",
			"Lo Prado"=>"Lo Prado",
			"Macul"=>"Macul",
			"Maipu"=>"Maipu",
			"Nunoa"=>"Nunoa",
			"Pedro Aguirre Cerda"=>"Pedro Aguirre Cerda",
			"Penalolen"=>"Penalolen",
			"Providencia"=>"Providencia",
			"Pudahuel"=>"Pudahuel",
			"Quilicura"=>"Quilicura",
			"Quinta Normal"=>"Quinta Normal",
			"Recoleta"=>"Recoleta",
			"Renca"=>"Renca",
			"San Miguel"=>"San Miguel",
			"San Joaquin"=>"San Joaquin",
			"San Ramon"=>"San Ramon",
			"Santiago"=>"Santiago",
			"Vitacura"=>"Vitacura",
			"El Monte"=>"El Monte",
			"Isla de Maipo"=>"Isla de Maipo",
			"Padre Hurtado"=>"Padre Hurtado",
			"Penaflor"=>"Penaflor",
			"Talagante"=>"Talagante",
			"Codegua"=>"Codegua",
			"Coinco"=>"Coinco",
			"Coltauco"=>"Coltauco",
			"Donihue"=>"Donihue",
			"Graneros"=>"Graneros",
			"Las Cabras"=>"Las Cabras",
			"Machali"=>"Machali",
			"Malloa"=>"Malloa",
			"Mostazal"=>"Mostazal",
			"Olivar"=>"Olivar",
			"Peumo"=>"Peumo",
			"Pichidegua"=>"Pichidegua",
			"Quinta de Tilcoco"=>"Quinta de Tilcoco",
			"Rancagua"=>"Rancagua",
			"Rengo"=>"Rengo",
			"Requinoa"=>"Requinoa",
			"San Vicente de Tagua Tagua"=>"San Vicente de Tagua Tagua",
			"La Estrella"=>"La Estrella",
			"Litueche"=>"Litueche",
			"Marchihue"=>"Marchihue",
			"Navidad"=>"Navidad",
			"Peredones"=>"Peredones",
			"Pichilemu"=>"Pichilemu",
			"Chepica"=>"Chepica",
			"Chimbarongo"=>"Chimbarongo",
			"Lolol"=>"Lolol",
			"Nancagua"=>"Nancagua",
			"Palmilla"=>"Palmilla",
			"Peralillo"=>"Peralillo",
			"Placilla"=>"Placilla",
			"Pumanque"=>"Pumanque",
			"San Fernando"=>"San Fernando",
			"Santa Cruz"=>"Santa Cruz",
			"Cauquenes"=>"Cauquenes",
			"Chanco"=>"Chanco",
			"Pelluhue"=>"Pelluhue",
			"Curico"=>"Curico",
			"Hualane"=>"Hualane",
			"Licanten"=>"Licanten",
			"Molina"=>"Molina",
			"Rauco"=>"Rauco",
			"Romeral"=>"Romeral",
			"Sagrada Familia"=>"Sagrada Familia",
			"Teno"=>"Teno",
			"Vichuquen"=>"Vichuquen",
			"Colbun"=>"Colbun",
			"Linares"=>"Linares",
			"Longavi"=>"Longavi",
			"Parral"=>"Parral",
			"Retiro"=>"Retiro",
			"San Javier"=>"San Javier",
			"Villa Alegre"=>"Villa Alegre",
			"Yerbas Buenas"=>"Yerbas Buenas",
			"Constitucion"=>"Constitucion",
			"Curepto"=>"Curepto",
			"Empedrado"=>"Empedrado",
			"Maule"=>"Maule",
			"Pelarco"=>"Pelarco",
			"Pencahue"=>"Pencahue",
			"Rio Claro"=>"Rio Claro",
			"San Clemente"=>"San Clemente",
			"San Rafael"=>"San Rafael",
			"Talca"=>"Talca",
			"Arauco"=>"Arauco",
			"Canete"=>"Canete",
			"Contulmo"=>"Contulmo",
			"Curanilahue"=>"Curanilahue",
			"Lebu"=>"Lebu",
			"Los Alamos"=>"Los Alamos",
			"Tirua"=>"Tirua",
			"Alto Biobio"=>"Alto Biobio",
			"Antuco"=>"Antuco",
			"Cabrero"=>"Cabrero",
			"Laja"=>"Laja",
			"Los Angeles"=>"Los Angeles",
			"Mulchen"=>"Mulchen",
			"Nacimiento"=>"Nacimiento",
			"Negrete"=>"Negrete",
			"Quilaco"=>"Quilaco",
			"Quilleco"=>"Quilleco",
			"San Rosendo"=>"San Rosendo",
			"Santa Barbara"=>"Santa Barbara",
			"Tucapel"=>"Tucapel",
			"Yumbel"=>"Yumbel",
			"Chiguayante"=>"Chiguayante",
			"Concepcion"=>"Concepcion",
			"Coronel"=>"Coronel",
			"Florida"=>"Florida",
			"Hualpen"=>"Hualpen",
			"Hualqui"=>"Hualqui",
			"Lota"=>"Lota",
			"Penco"=>"Penco",
			"San Pedro de La Paz"=>"San Pedro de La Paz",
			"Santa Juana"=>"Santa Juana",
			"Talcahuano"=>"Talcahuano",
			"Tome"=>"Tome",
			"Bulnes"=>"Bulnes",
			"Chillan"=>"Chillan",
			"Chillan Viejo"=>"Chillan Viejo",
			"Cobquecura"=>"Cobquecura",
			"Coelemu"=>"Coelemu",
			"Coihueco"=>"Coihueco",
			"El Carmen"=>"El Carmen",
			"Ninhue"=>"Ninhue",
			"Niquen"=>"Niquen",
			"Pemuco"=>"Pemuco",
			"Pinto"=>"Pinto",
			"Portezuelo"=>"Portezuelo",
			"Quillon"=>"Quillon",
			"Quirihue"=>"Quirihue",
			"Ranquil"=>"Ranquil",
			"San Carlos"=>"San Carlos",
			"San Fabian"=>"San Fabian",
			"San Ignacio"=>"San Ignacio",
			"San Nicolas"=>"San Nicolas",
			"Treguaco"=>"Treguaco",
			"Yungay"=>"Yungay",
			"Carahue"=>"Carahue",
			"Cholchol"=>"Cholchol",
			"Cunco"=>"Cunco",
			"Curarrehue"=>"Curarrehue",
			"Freire"=>"Freire",
			"Galvarino"=>"Galvarino",
			"Gorbea"=>"Gorbea",
			"Lautaro"=>"Lautaro",
			"Loncoche"=>"Loncoche",
			"Melipeuco"=>"Melipeuco",
			"Nueva Imperial"=>"Nueva Imperial",
			"Padre Las Casas"=>"Padre Las Casas",
			"Perquenco"=>"Perquenco",
			"Pitrufquen"=>"Pitrufquen",
			"Pucon"=>"Pucon",
			"Saavedra"=>"Saavedra",
			"Temuco"=>"Temuco",
			"Teodoro Schmidt"=>"Teodoro Schmidt",
			"Tolten"=>"Tolten",
			"Vilcun"=>"Vilcun",
			"Villarrica"=>"Villarrica",
			"Angol"=>"Angol",
			"Collipulli"=>"Collipulli",
			"Curacautin"=>"Curacautin",
			"Ercilla"=>"Ercilla",
			"Lonquimay"=>"Lonquimay",
			"Los Sauces"=>"Los Sauces",
			"Lumaco"=>"Lumaco",
			"Puren"=>"Puren",
			"Renaico"=>"Renaico",
			"Traiguen"=>"Traiguen",
			"Victoria"=>"Victoria",
			"Corral"=>"Corral",
			"Lanco"=>"Lanco",
			"Los Lagos"=>"Los Lagos",
			"Mafil"=>"Mafil",
			"Mariquina"=>"Mariquina",
			"Paillaco"=>"Paillaco",
			"Panguipulli"=>"Panguipulli",
			"Valdivia"=>"Valdivia",
			"Futrono"=>"Futrono",
			"La Union"=>"La Union",
			"Lago Ranco"=>"Lago Ranco",
			"Rio Bueno"=>"Rio Bueno",
			"Ancud"=>"Ancud",
			"Castro"=>"Castro",
			"Chonchi"=>"Chonchi",
			"Curaco de Velez"=>"Curaco de Velez",
			"Dalcahue"=>"Dalcahue",
			"Puqueldon"=>"Puqueldon",
			"Queilen"=>"Queilen",
			"Quemchi"=>"Quemchi",
			"Quellon"=>"Quellon",
			"Quinchao"=>"Quinchao",
			"Calbuco"=>"Calbuco",
			"Cochamo"=>"Cochamo",
			"Fresia"=>"Fresia",
			"Frutillar"=>"Frutillar",
			"Llanquihue"=>"Llanquihue",
			"Los Muermos"=>"Los Muermos",
			"Maullin"=>"Maullin",
			"Puerto Montt"=>"Puerto Montt",
			"Puerto Varas"=>"Puerto Varas",
			"Osorno"=>"Osorno",
			"Puero Octay"=>"Puero Octay",
			"Purranque"=>"Purranque",
			"Puyehue"=>"Puyehue",
			"Rio Negro"=>"Rio Negro",
			"San Juan de la Costa"=>"San Juan de la Costa",
			"San Pablo"=>"San Pablo",
			"Chaiten"=>"Chaiten",
			"Futaleufu"=>"Futaleufu",
			"Hualaihue"=>"Hualaihue",
			"Palena"=>"Palena",
			"Aisen"=>"Aisen",
			"Cisnes"=>"Cisnes",
			"Guaitecas"=>"Guaitecas",
			"Cochrane"=>"Cochrane",
			"O'higgins"=>"O'higgins",
			"Tortel"=>"Tortel",
			"Coihaique"=>"Coihaique",
			"Lago Verde"=>"Lago Verde",
			"Chile Chico"=>"Chile Chico",
			"Rio Ibanez"=>"Rio Ibanez",
			"Antartica"=>"Antartica",
			"Cabo de Hornos"=>"Cabo de Hornos",
			"Laguna Blanca"=>"Laguna Blanca",
			"Punta Arenas"=>"Punta Arenas",
			"Rio Verde"=>"Rio Verde",
			"San Gregorio"=>"San Gregorio",
			"Porvenir"=>"Porvenir",
			"Primavera"=>"Primavera",
			"Timaukel"=>"Timaukel",
			"Natales"=>"Natales",
			"Torres del Paine"=>"Torres del Paine",
			"Cabildo"=>"Cabildo"
		),
		'input_class' => array(
			'wc-enhanced-select',
		)
	), $fields['shipping']['shipping_city'] );
	$fields['shipping']['shipping_city'] = $city_args;
	$fields['billing']['billing_city'] = $city_args;
	$fields['billing']['billing_city']['class'][] = 'mmcm';
	wc_enqueue_js( "
	jQuery( ':input.wc-enhanced-select' ).filter( ':not(.enhanced)' ).each( function() {
		var select2_args = { minimumResultsForSearch: 5 };
		jQuery( this ).select2( select2_args ).addClass( 'enhanced' );
	});" );

	wc_enqueue_js( "
	jQuery(document).ready(function(){
		let ciudades = [
			{ciudad:'',region:'Seleccione región'},
		{ciudad:'',region:'Arica y Parinacota'},
		  {ciudad:'Arica',region:'Arica y Parinacota'},
		  {ciudad:'Camarones',region:'Arica y Parinacota'},
		  {ciudad:'General Lagos',region:'Arica y Parinacota'},
		  {ciudad:'Putre',region:'Arica y Parinacota'},
		{ciudad:'',region:'Tarapacá'},
		  {ciudad:'Alto Hospicio',region:'Tarapacá'},
		  {ciudad:'Iquique',region:'Tarapacá'},
		  {ciudad:'Camina',region:'Tarapacá'},
		  {ciudad:'Colchane',region:'Tarapacá'},
		  {ciudad:'Huara',region:'Tarapacá'},
		  {ciudad:'Pica',region:'Tarapacá'},
		  {ciudad:'Pozo Almonte',region:'Tarapacá'},

	{ciudad:'',region:'Antofagasta'},
		  {ciudad:'Antofagasta',region:'Antofagasta'},
		  {ciudad:'Mejillones',region:'Antofagasta'},
		  {ciudad:'Sierra Gorda',region:'Antofagasta'},
		  {ciudad:'Taltal',region:'Antofagasta'},
		  {ciudad:'Calama',region:'Antofagasta'},
		  {ciudad:'Ollague',region:'Antofagasta'},
		  {ciudad:'San Pedro de Atacama',region:'Antofagasta'},
		  {ciudad:'Maria Elena',region:'Antofagasta'},
		  {ciudad:'Tocopilla',region:'Antofagasta'},
	{ciudad:'',region:'Atacama'},
		  {ciudad:'Chanaral',region:'Atacama'},
		  {ciudad:'Diego de Almagro',region:'Atacama'},
		  {ciudad:'Caldera',region:'Atacama'},
		  {ciudad:'Copiapo',region:'Atacama'},
		  {ciudad:'Tierra Amarilla',region:'Atacama'},
		  {ciudad:'Alto del Carmen',region:'Atacama'},
		  {ciudad:'Freirina',region:'Atacama'},
		  {ciudad:'Huasco',region:'Atacama'},
		  {ciudad:'Vallenar',region:'Atacama'},
	{ciudad:'',region:'Coquimbo'},	  
		  {ciudad:'Canela',region:'Coquimbo'},
		  {ciudad:'Illapel',region:'Coquimbo'},
		  {ciudad:'Los Vilos',region:'Coquimbo'},
		  {ciudad:'Salamanca',region:'Coquimbo'},
		  {ciudad:'Andacollo',region:'Coquimbo'},
		  {ciudad:'Coquimbo',region:'Coquimbo'},
		  {ciudad:'La Higuera',region:'Coquimbo'},
		  {ciudad:'La Serena',region:'Coquimbo'},
		  {ciudad:'Paihuaco',region:'Coquimbo'},
		  {ciudad:'Vicuna',region:'Coquimbo'},
		  {ciudad:'Combarbala',region:'Coquimbo'},
		  {ciudad:'Monte Patria',region:'Coquimbo'},
		  {ciudad:'Ovalle',region:'Coquimbo'},
		  {ciudad:'Punitaqui',region:'Coquimbo'},
		  {ciudad:'Rio Hurtado',region:'Coquimbo'},
	{ciudad:'',region:'Valparaíso'},
		  {ciudad:'Isla de Pascua',region:'Valparaíso'},
		  {ciudad:'Calle Larga',region:'Valparaíso'},
		  {ciudad:'Los Andes',region:'Valparaíso'},
		  {ciudad:'Rinconada',region:'Valparaíso'},
		  {ciudad:'San Esteban',region:'Valparaíso'},
		  {ciudad:'La Ligua',region:'Valparaíso'},
		  {ciudad:'Papudo',region:'Valparaíso'},
		  {ciudad:'Petorca',region:'Valparaíso'},
		  {ciudad:'Zapallar',region:'Valparaíso'},
		  {ciudad:'Hijuelas',region:'Valparaíso'},
		  {ciudad:'La Calera',region:'Valparaíso'},
		  {ciudad:'La Cruz',region:'Valparaíso'},
		  {ciudad:'Limache',region:'Valparaíso'},
		  {ciudad:'Nogales',region:'Valparaíso'},
		  {ciudad:'Olmue',region:'Valparaíso'},
		  {ciudad:'Quillota',region:'Valparaíso'},
		  {ciudad:'Algarrobo',region:'Valparaíso'},
		  {ciudad:'Cartagena',region:'Valparaíso'},
		  {ciudad:'El Quisco',region:'Valparaíso'},
		  {ciudad:'El Tabo',region:'Valparaíso'},
		  {ciudad:'San Antonio',region:'Valparaíso'},
		  {ciudad:'Santo Domingo',region:'Valparaíso'},
		  {ciudad:'Catemu',region:'Valparaíso'},
		  {ciudad:'Llaillay',region:'Valparaíso'},
		  {ciudad:'Panquehue',region:'Valparaíso'},
		  {ciudad:'Putaendo',region:'Valparaíso'},
		  {ciudad:'San Felipe',region:'Valparaíso'},
		  {ciudad:'Santa Maria',region:'Valparaíso'},
		  {ciudad:'Casablanca',region:'Valparaíso'},
		  {ciudad:'Concon',region:'Valparaíso'},
		  {ciudad:'Juan Fernandez',region:'Valparaíso'},
		  {ciudad:'Puchuncavi',region:'Valparaíso'},
		  {ciudad:'Quilpue',region:'Valparaíso'},
		  {ciudad:'Quintero',region:'Valparaíso'},
		  {ciudad:'Valparaiso',region:'Valparaíso'},
		  {ciudad:'Villa Alemana',region:'Valparaíso'},
		  {ciudad:'Vina del Mar',region:'Valparaíso'},
	{ciudad:'',region:'Metropolitana de Santiago'},
		  {ciudad:'Colina',region:'Metropolitana de Santiago'},
		  {ciudad:'Lampa',region:'Metropolitana de Santiago'},
		  {ciudad:'Tiltil',region:'Metropolitana de Santiago'},
		  {ciudad:'Pirque',region:'Metropolitana de Santiago'},
		  {ciudad:'Puente Alto',region:'Metropolitana de Santiago'},
		  {ciudad:'San Jose de Maipo',region:'Metropolitana de Santiago'},
		  {ciudad:'Buin',region:'Metropolitana de Santiago'},
		  {ciudad:'Calera de Tango',region:'Metropolitana de Santiago'},
		  {ciudad:'Paine',region:'Metropolitana de Santiago'},
		  {ciudad:'San Bernardo',region:'Metropolitana de Santiago'},
		  {ciudad:'Alhue',region:'Metropolitana de Santiago'},
		  {ciudad:'Curacavi',region:'Metropolitana de Santiago'},
		  {ciudad:'Maria Pinto',region:'Metropolitana de Santiago'},
		  {ciudad:'Melipilla',region:'Metropolitana de Santiago'},
		  {ciudad:'San Pedro',region:'Metropolitana de Santiago'},
		  {ciudad:'Cerrillos',region:'Metropolitana de Santiago'},
		  {ciudad:'Cerro Navia',region:'Metropolitana de Santiago'},
		  {ciudad:'Conchali',region:'Metropolitana de Santiago'},
		  {ciudad:'El Bosque',region:'Metropolitana de Santiago'},
		  {ciudad:'Estacion Central',region:'Metropolitana de Santiago'},
		  {ciudad:'Huechuraba',region:'Metropolitana de Santiago'},
		  {ciudad:'Independencia',region:'Metropolitana de Santiago'},
		  {ciudad:'La Cisterna',region:'Metropolitana de Santiago'},
		  {ciudad:'La Granja',region:'Metropolitana de Santiago'},
		  {ciudad:'La Florida',region:'Metropolitana de Santiago'},
		  {ciudad:'La Pintana',region:'Metropolitana de Santiago'},
		  {ciudad:'La Reina',region:'Metropolitana de Santiago'},
		  {ciudad:'Las Condes',region:'Metropolitana de Santiago'},
		  {ciudad:'Lo Barnechea',region:'Metropolitana de Santiago'},
		  {ciudad:'Lo Espejo',region:'Metropolitana de Santiago'},
		  {ciudad:'Lo Prado',region:'Metropolitana de Santiago'},
		  {ciudad:'Macul',region:'Metropolitana de Santiago'},
		  {ciudad:'Maipu',region:'Metropolitana de Santiago'},
		  {ciudad:'Nunoa',region:'Metropolitana de Santiago'},
		  {ciudad:'Pedro Aguirre Cerda',region:'Metropolitana de Santiago'},
		  {ciudad:'Penalolen',region:'Metropolitana de Santiago'},
		  {ciudad:'Providencia',region:'Metropolitana de Santiago'},
		  {ciudad:'Pudahuel',region:'Metropolitana de Santiago'},
		  {ciudad:'Quilicura',region:'Metropolitana de Santiago'},
		  {ciudad:'Quinta Normal',region:'Metropolitana de Santiago'},
		  {ciudad:'Recoleta',region:'Metropolitana de Santiago'},
		  {ciudad:'Renca',region:'Metropolitana de Santiago'},
		  {ciudad:'San Miguel',region:'Metropolitana de Santiago'},
		  {ciudad:'San Joaquin',region:'Metropolitana de Santiago'},
		  {ciudad:'San Ramon',region:'Metropolitana de Santiago'},
		  {ciudad:'Santiago',region:'Metropolitana de Santiago'},
		  {ciudad:'Vitacura',region:'Metropolitana de Santiago'},
		  {ciudad:'El Monte',region:'Metropolitana de Santiago'},
		  {ciudad:'Isla de Maipo',region:'Metropolitana de Santiago'},
		  {ciudad:'Padre Hurtado',region:'Metropolitana de Santiago'},
		  {ciudad:'Penaflor',region:'Metropolitana de Santiago'},
		  {ciudad:'Talagante',region:'Metropolitana de Santiago'},
	{ciudad:'',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Codegua',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Coinco',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Coltauco',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Donihue',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Graneros',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Las Cabras',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Machali',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Malloa',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Mostazal',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Olivar',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Peumo',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Pichidegua',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Quinta de Tilcoco',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Rancagua',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Rengo',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Requinoa',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'San Vicente de Tagua Tagua',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'La Estrella',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Litueche',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Marchihue',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Navidad',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Peredones',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Pichilemu',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Chepica',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Chimbarongo',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Lolol',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Nancagua',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Palmilla',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Peralillo',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Placilla',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Pumanque',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'San Fernando',region:'Libertador General Bernardo O’Higgins'},
		  {ciudad:'Santa Cruz',region:'Libertador General Bernardo O’Higgins'},
	{ciudad:'',region:'Maule'},
		  {ciudad:'Cauquenes',region:'Maule'},
		  {ciudad:'Chanco',region:'Maule'},
		  {ciudad:'Pelluhue',region:'Maule'},
		  {ciudad:'Curico',region:'Maule'},
		  {ciudad:'Hualane',region:'Maule'},
		  {ciudad:'Licanten',region:'Maule'},
		  {ciudad:'Molina',region:'Maule'},
		  {ciudad:'Rauco',region:'Maule'},
		  {ciudad:'Romeral',region:'Maule'},
		  {ciudad:'Sagrada Familia',region:'Maule'},
		  {ciudad:'Teno',region:'Maule'},
		  {ciudad:'Vichuquen',region:'Maule'},
		  {ciudad:'Colbun',region:'Maule'},
		  {ciudad:'Linares',region:'Maule'},
		  {ciudad:'Longavi',region:'Maule'},
		  {ciudad:'Parral',region:'Maule'},
		  {ciudad:'Retiro',region:'Maule'},
		  {ciudad:'San Javier',region:'Maule'},
		  {ciudad:'Villa Alegre',region:'Maule'},
		  {ciudad:'Yerbas Buenas',region:'Maule'},
		  {ciudad:'Constitucion',region:'Maule'},
		  {ciudad:'Curepto',region:'Maule'},
		  {ciudad:'Empedrado',region:'Maule'},
		  {ciudad:'Maule',region:'Maule'},
		  {ciudad:'Pelarco',region:'Maule'},
		  {ciudad:'Pencahue',region:'Maule'},
		  {ciudad:'Rio Claro',region:'Maule'},
		  {ciudad:'San Clemente',region:'Maule'},
		  {ciudad:'San Rafael',region:'Maule'},
		  {ciudad:'Talca',region:'Maule'},
	{ciudad:'',region:'Biobío'},
		  {ciudad:'Arauco',region:'Biobío'},
		  {ciudad:'Canete',region:'Biobío'},
		  {ciudad:'Contulmo',region:'Biobío'},
		  {ciudad:'Curanilahue',region:'Biobío'},
		  {ciudad:'Lebu',region:'Biobío'},
		  {ciudad:'Los Alamos',region:'Biobío'},
		  {ciudad:'Tirua',region:'Biobío'},
		  {ciudad:'Alto Biobio',region:'Biobío'},
		  {ciudad:'Antuco',region:'Biobío'},
		  {ciudad:'Cabrero',region:'Biobío'},
		  {ciudad:'Laja',region:'Biobío'},
		  {ciudad:'Los Angeles',region:'Biobío'},
		  {ciudad:'Mulchen',region:'Biobío'},
		  {ciudad:'Nacimiento',region:'Biobío'},
		  {ciudad:'Negrete',region:'Biobío'},
		  {ciudad:'Quilaco',region:'Biobío'},
		  {ciudad:'Quilleco',region:'Biobío'},
		  {ciudad:'San Rosendo',region:'Biobío'},
		  {ciudad:'Santa Barbara',region:'Biobío'},
		  {ciudad:'Tucapel',region:'Biobío'},
		  {ciudad:'Yumbel',region:'Biobío'},
		  {ciudad:'Chiguayante',region:'Biobío'},
		  {ciudad:'Concepcion',region:'Biobío'},
		  {ciudad:'Coronel',region:'Biobío'},
		  {ciudad:'Florida',region:'Biobío'},
		  {ciudad:'Hualpen',region:'Biobío'},
		  {ciudad:'Hualqui',region:'Biobío'},
		  {ciudad:'Lota',region:'Biobío'},
		  {ciudad:'Penco',region:'Biobío'},
		  {ciudad:'San Pedro de La Paz',region:'Biobío'},
		  {ciudad:'Santa Juana',region:'Biobío'},
		  {ciudad:'Talcahuano',region:'Biobío'},
		  {ciudad:'Tome',region:'Biobío'},
	{ciudad:'',region:'Ñuble'},
		  {ciudad:'Bulnes',region:'Ñuble'},
		  {ciudad:'Chillan',region:'Ñuble'},
		  {ciudad:'Chillan Viejo',region:'Ñuble'},
		  {ciudad:'Cobquecura',region:'Ñuble'},
		  {ciudad:'Coelemu',region:'Ñuble'},
		  {ciudad:'Coihueco',region:'Ñuble'},
		  {ciudad:'El Carmen',region:'Ñuble'},
		  {ciudad:'Ninhue',region:'Ñuble'},
		  {ciudad:'Niquen',region:'Ñuble'},
		  {ciudad:'Pemuco',region:'Ñuble'},
		  {ciudad:'Pinto',region:'Ñuble'},
		  {ciudad:'Portezuelo',region:'Ñuble'},
		  {ciudad:'Quillon',region:'Ñuble'},
		  {ciudad:'Quirihue',region:'Ñuble'},
		  {ciudad:'Ranquil',region:'Ñuble'},
		  {ciudad:'San Carlos',region:'Ñuble'},
		  {ciudad:'San Fabian',region:'Ñuble'},
		  {ciudad:'San Ignacio',region:'Ñuble'},
		  {ciudad:'San Nicolas',region:'Ñuble'},
		  {ciudad:'Treguaco',region:'Ñuble'},
		  {ciudad:'Yungay',region:'Ñuble'},
	{ciudad:'',region:'Araucanía'},
		  {ciudad:'Carahue',region:'Araucanía'},
		  {ciudad:'Cholchol',region:'Araucanía'},
		  {ciudad:'Cunco',region:'Araucanía'},
		  {ciudad:'Curarrehue',region:'Araucanía'},
		  {ciudad:'Freire',region:'Araucanía'},
		  {ciudad:'Galvarino',region:'Araucanía'},
		  {ciudad:'Gorbea',region:'Araucanía'},
		  {ciudad:'Lautaro',region:'Araucanía'},
		  {ciudad:'Loncoche',region:'Araucanía'},
		  {ciudad:'Melipeuco',region:'Araucanía'},
		  {ciudad:'Nueva Imperial',region:'Araucanía'},
		  {ciudad:'Padre Las Casas',region:'Araucanía'},
		  {ciudad:'Perquenco',region:'Araucanía'},
		  {ciudad:'Pitrufquen',region:'Araucanía'},
		  {ciudad:'Pucon',region:'Araucanía'},
		  {ciudad:'Saavedra',region:'Araucanía'},
		  {ciudad:'Temuco',region:'Araucanía'},
		  {ciudad:'Teodoro Schmidt',region:'Araucanía'},
		  {ciudad:'Tolten',region:'Araucanía'},
		  {ciudad:'Vilcun',region:'Araucanía'},
		  {ciudad:'Villarrica',region:'Araucanía'},
		  {ciudad:'Angol',region:'Araucanía'},
		  {ciudad:'Collipulli',region:'Araucanía'},
		  {ciudad:'Curacautin',region:'Araucanía'},
		  {ciudad:'Ercilla',region:'Araucanía'},
		  {ciudad:'Lonquimay',region:'Araucanía'},
		  {ciudad:'Los Sauces',region:'Araucanía'},
		  {ciudad:'Lumaco',region:'Araucanía'},
		  {ciudad:'Puren',region:'Araucanía'},
		  {ciudad:'Renaico',region:'Araucanía'},
		  {ciudad:'Traiguen',region:'Araucanía'},
		  {ciudad:'Victoria',region:'Araucanía'},
	{ciudad:'',region:'Los Ríos'},
		  {ciudad:'Corral',region:'Los Ríos'},
		  {ciudad:'Lanco',region:'Los Ríos'},
		  {ciudad:'Los Lagos',region:'Los Ríos'},
		  {ciudad:'Mafil',region:'Los Ríos'},
		  {ciudad:'Mariquina',region:'Los Ríos'},
		  {ciudad:'Paillaco',region:'Los Ríos'},
		  {ciudad:'Panguipulli',region:'Los Ríos'},
		  {ciudad:'Valdivia',region:'Los Ríos'},
		  {ciudad:'Futrono',region:'Los Ríos'},
		  {ciudad:'La Union',region:'Los Ríos'},
		  {ciudad:'Lago Ranco',region:'Los Ríos'},
		  {ciudad:'Rio Bueno',region:'Los Ríos'},
	{ciudad:'',region:'Los Lagos'},
		  {ciudad:'Ancud',region:'Los Lagos'},
		  {ciudad:'Castro',region:'Los Lagos'},
		  {ciudad:'Chonchi',region:'Los Lagos'},
		  {ciudad:'Curaco de Velez',region:'Los Lagos'},
		  {ciudad:'Dalcahue',region:'Los Lagos'},
		  {ciudad:'Puqueldon',region:'Los Lagos'},
		  {ciudad:'Queilen',region:'Los Lagos'},
		  {ciudad:'Quemchi',region:'Los Lagos'},
		  {ciudad:'Quellon',region:'Los Lagos'},
		  {ciudad:'Quinchao',region:'Los Lagos'},
		  {ciudad:'Calbuco',region:'Los Lagos'},
		  {ciudad:'Cochamo',region:'Los Lagos'},
		  {ciudad:'Fresia',region:'Los Lagos'},
		  {ciudad:'Frutillar',region:'Los Lagos'},
		  {ciudad:'Llanquihue',region:'Los Lagos'},
		  {ciudad:'Los Muermos',region:'Los Lagos'},
		  {ciudad:'Maullin',region:'Los Lagos'},
		  {ciudad:'Puerto Montt',region:'Los Lagos'},
		  {ciudad:'Puerto Varas',region:'Los Lagos'},
		  {ciudad:'Osorno',region:'Los Lagos'},
		  {ciudad:'Puero Octay',region:'Los Lagos'},
		  {ciudad:'Purranque',region:'Los Lagos'},
		  {ciudad:'Puyehue',region:'Los Lagos'},
		  {ciudad:'Rio Negro',region:'Los Lagos'},
		  {ciudad:'San Juan de la Costa',region:'Los Lagos'},
		  {ciudad:'San Pablo',region:'Los Lagos'},
		  {ciudad:'Chaiten',region:'Los Lagos'},
		  {ciudad:'Futaleufu',region:'Los Lagos'},
		  {ciudad:'Hualaihue',region:'Los Lagos'},
		  {ciudad:'Palena',region:'Los Lagos'},
	{ciudad:'',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Aisen',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Cisnes',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Guaitecas',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Cochrane',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'O\'higgins',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Tortel',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Coihaique',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Lago Verde',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Chile Chico',region:'Aysén del General Carlos Ibáñez del Campo'},
		  {ciudad:'Rio Ibanez',region:'Aysén del General Carlos Ibáñez del Campo'},
	{ciudad:'',region:'Magallanes y la Antártica Chilena'},  
		  {ciudad:'Antartica',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Cabo de Hornos',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Laguna Blanca',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Punta Arenas',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Rio Verde',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'San Gregorio',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Porvenir',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Primavera',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Timaukel',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Natales',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Torres del Paine',region:'Magallanes y la Antártica Chilena'},
		  {ciudad:'Cabildo',region:'Valparaíso'}
		];
		jQuery('.mmcm').change(function(){
		  for (var i = 0; i < ciudades.length; i++) {
			if (ciudades[i].ciudad == jQuery('#select2-billing_city-container').attr('title')) {
			  jQuery('.mmrm').val(ciudades[i].region).prop('selected', true);
			  jQuery('#select2-billing_state-container').attr('title',ciudades[i].region);
			  jQuery('#select2-billing_state-container').empty().append(ciudades[i].region);
			}
			if (ciudades[i].ciudad == jQuery('#select2-shipping_city-container').attr('title')) {
			  jQuery('.mmrms').val(ciudades[i].region).prop('selected', true);
			  jQuery('#select2-shipping_state-container').attr('title',ciudades[i].region);
			  jQuery('#select2-shipping_state-container').empty().append(ciudades[i].region);
			}
		  }
		});
		jQuery('.mmrm').change(function(){
			jQuery('#billing_city').empty();
			for (var i = 0; i < ciudades.length; i++) {
				if (ciudades[i].region == jQuery('#select2-billing_state-container').attr('title')) {
					jQuery('#billing_city').append('<option value=\"'+ ciudades[i].ciudad +'\"> ' + ciudades[i].ciudad + ' </option>');
				}
			}
		});
		jQuery('.mmrms').change(function(){
			jQuery('#shipping_city').empty();
			for (var i = 0; i < ciudades.length; i++) {
				if (ciudades[i].region == jQuery('#select2-shipping_state-container').attr('title')) {
					jQuery('#shipping_city').append('<option value=\"'+ ciudades[i].ciudad +'\"> ' + ciudades[i].ciudad + ' </option>');
				}
			}
		});		
		jQuery('#customised_field_rut_empresa').attr('minlength','9');
    	jQuery('#customised_field_rut_empresa').attr('maxlength','10');
    	jQuery('#customised_field_rut_empresa').attr('required','required');
		jQuery('#customised_field_rut_empresa').attr('type','text');
		//class para rut login
		jQuery('#customised_field_rut_empresa').each(function(){
			jQuery(this).on('keyup', function(evt) {
				var keycode = evt.charCode || evt.keyCode;	
				var valor_rut = jQuery(this);
				if ( keycode == 75 ) {		
					var valor_rut_key_k = jQuery(this).val();			
					valor_rut_key_k = valor_rut_key_k.toUpperCase(); 
					jQuery(this).val(valor_rut_key_k);
				}
				guion_rut(valor_rut);
			}).on('keypress', function(evt) {

				var keycode = evt.charCode || evt.keyCode;
				if ( (keycode >= 35 && keycode <= 39) || keycode == 75 || keycode == 8 || keycode == 45 || keycode == 107 || keycode == 173 || keycode == 109 ) {
					return;
				}
				//console.log(keycode);
				if (keycode == 46) {
					return false;
				}
				if( keycode < 48 || keycode > 57 ){
					return false;
				}				
			})
			.on('change', function() {
				var valor_rut = jQuery(this);				
				guion_rut(valor_rut);				
			});
		}); //each

		
		let guion_rut = function(values) {	
			let rut = values.val();
			rut = rut.replace(/[-]/gi,'');
			rut = rut.replace(/[.]/gi,'');
			rut = rut.replace(/^0+|[^0-9kK]+/g, '');
			rut = rut.toUpperCase();
			if( rut.length > 1 && rut.indexOf('-') == -1 ){	
			  rut = rut.substring(0,rut.length - 1) + '-' + rut.substring(rut.length - 1, rut.lenght);
			  values.val(rut);
			}else{
			  values.val(rut);
			}  
			
		  }; //guion_rut
		  jQuery(document).on('click','#place_order',function(){
			rut = jQuery('#customised_field_rut_empresa');
			var valor = rut.val();
			//console.log(rut.val().length)
			if(rut.val().length < 9){
				
				rut.val('');				
			}		
		  });
	  });	
	");
	return $fields;
}

function perfil_ciudades_chilenas ( $fields ) {
	$city_args = wp_parse_args( ciudades_chilenas($fields), $fields['city'] );
	$fields['city'] = $city_args;
	$fields['city']['class'][] = 'mmcm';
	wc_enqueue_js( "
	jQuery( ':input.wc-enhanced-select' ).filter( ':not(.enhanced)' ).each( function() {
			var select2_args = { minimumResultsForSearch: 5 };
			jQuery( this ).select2( select2_args ).addClass( 'enhanced' );
	});" );
	return $fields;
}

function rdcw_change_checkout_fields( $fields ) {

	$fields['billing']['billing_state']['placeholder'] = 'Seleccione una Región';
	$fields['billing']['billing_state']['label'] = 'Región';
	$fields['billing']['billing_state']['class'][] = 'mmrm';

	$fields['shipping']['shipping_state']['placeholder'] = 'Seleccione una Región';
	$fields['shipping']['shipping_state']['label'] = 'Región';
	$fields['shipping']['shipping_state']['class'][] = 'mmrms';

	unset($fields['billing']['billing_postcode']);
	unset($fields['shipping']['shipping_postcode']);

	return $fields;
}

add_filter('woocommerce_checkout_fields' , 'rdcw_change_checkout_fields');
add_filter('woocommerce_states', 'rdcw_regiones_de_chile');
add_filter('woocommerce_checkout_fields', 'ciudades_chilenas');
add_filter('woocommerce_default_address_fields', 'perfil_ciudades_chilenas');



