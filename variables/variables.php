<?php

$nombre_inmobiliaria = "La Cumbre Inmobiliaria";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/Logo.png",
		"alt" => "Logo La Cumbre Inmobiliaria"
	],
	$blanco = [
		"src" => "images/Logo_Blanco.png",
		"alt" => "Logo version positivo La Cumbre Inmobiliaria"
	],
	$negro = [
		"src" => "images/Logo_Negro.png",
		"alt" => "Logo version negativo La Cumbre Inmobiliaria"
	],
]; 

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/lacumbreinmobiliaria/?igshid=rgc40n8zlq0x",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
	"twitter" => [
		"link" => "https://www.twitter.com/",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
];

//datos de contacto 
$datos_contacto = [
	"direccion" => [
		"direccion" => "Carrera 43A # 1 sur 188 – Oficina 806, Medellín", //Torre Empresaria Davivienda
		"icono" => "fas fa-map-marker-alt",
	],
	"telefono_fijo" => [
		"link"=> "6043228425",
		"imprimir" => "(604) 322 8425",
		"icono" => "fas fa-phone-alt",
	],
	"celular" => [
		"link"=> "+573214393001",
		"imprimir" => "321 439 3001",
		"icono" => "fas fa-mobile-alt",
	],
	"whatsapp" => [
		"link"=> "https://api.whatsapp.com/send?phone=573214393001&text=&source=&data=",
		"imprimir" => "321 439 3001",
		"icono" => "fab fa-whatsapp",
	],
	"correo" => [
		"correo" => "contacto@lacumbreinmobiliaria.com",
		"icono" => "far fa-envelope",
	],
	"horario" => [
		"horario" => "Lunes a Viernes: 8:00 am -6:00 pm, Sabado: 8:00 am -1:00 PM, <br>&nbsp &nbsp &nbsp Domingos: 8:00 am- 12: 00 pm",
		"icono" => "fas fa-calendar-alt",
	],	
];

//logos aliados
$logos_aliados = [
	0 => "images/LOGO UNIFIANZA.png",
	1 => "images/LOGO EL LIBERTADOR.png",
	2 => "images/LOGO SURA.png",
	3 => "images/LOGO SIMI.png",
];


//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => 'Formulario persona Jurídica.pdf'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => 'Formulario persona natural.pdf'
	],
	2 => [
		'nombre' => 'Unifianza Persona Jurídica',
		'ruta' => 'Fianza_Juridicas.pdf'
	],
	3 => [
		'nombre' => 'Unifianza Persona Natural',
		'ruta' => 'Fianza_Naturales.pdf'
	],
	4 => [
		'nombre' => 'Sura Persona Jurídica',
		'ruta' => 'INQUILINO PERSONA JURIDICA.pdf'
	],
	5 => [
		'nombre' => 'Sura Persona Natural',
		'ruta' => 'INQUILINO PERSONA NATURAL.pdf'
	],6 => [
		'nombre' => 'Sura Codeudor Persona Natural y Jurídica',
		'ruta' => 'SOLICITUD CODEUDOR.pdf'
	],
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",
		"parrafos" => [
			0 => "La Cumbre Inmobiliaria es una empresa con más de 12 años de experiencia administrando y vendiendo propiedad raíz en la ciudad de Medellín. Gracias a los años de excelente servicio en la actividad inmobiliaria, ha logrado un reconocimiento dentro del sector inmobiliario por parte de sus clientes.",
			1 => "La Cumbre Inmobiliaria cuenta con un equipo de ejecutivos capacitados y dispuestos a prestar un servicio integral y de calidad, buscando la forma de satisfacer las necesidades de sus clientes, asesorando y respondiendo todas sus inquietudes a la hora de comprar y arrendar",
		],	
		"imagen" => "images/",
	],
	"mision" => [
		"imagen" => "images/mision.jpg",
		"titulo" => "Misión",
		"parrafo" => "Somos una compañía dedicada al servicio al cliente, nos especializamos en brindar los mejores servicios inmobiliarios. Creando valor y haciendo la diferencia en pro de una mejor calidad de vida para nuestros clientes y colaboradores.",
	],
	"vision" => [
		"imagen" => "images/vision.jpg",
		"titulo" => "Visión",
		"parrafo" => "Ser la empresa líder en nuestro sector inmobiliario consolidándonos a través de nuestra efectividad, servicio y responsabilidad.",

	],
	"valores" => [
		"imagen" => "images/valores.jpg",
		"titulo" => "Valores Corporativos",
		"parrafos" => [
			0 => "<b>Confiabilidad:</b> Nuestro éxito se basa en la actuación transparente y honesta en cada uno de nuestros procesos.",
			1 => "<b>Excelencia:</b> Nos motiva innovar lo que somos y brindamos, para dar forma a la excelencia en nuestra compañía como un hábito.",
			2 => "<b>Servicio:</b> La importancia de los sueños y anhelos de nuestros clientes, son correspondidos con la responsabilidad y el compromiso de hacerlos realidad brindando lo mejor de nosotros.",
		],
	],	
];

//textos y banner contador de estadisticas seccion home y quienes somos
$texto_contador_estadisticas = [
	"parrafos" => [
		0 => "Experiencia",
		1 => "Total Inmuebles",
		2 => "Inmuebles en Arriendo",
		3 => "Inmuebles en Venta",
		4 => "Inmuebles en Arriendo/Venta",
		],
		"imagen" =>[
			'imagen' => 'images/banner_estadisticas.jpg',
			'alt' => 'Imagen'
		],	
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
];
// imaganes varias
$imagenes = [
	"contactanos" => [
		'imagen' => 'images/contactanos.jpg',
		'alt' => 'Imagen'
	],
];

//textos servicios
$texto_servicios = [
	"arrendamientos" => [
		"titulo" => "Arrendamientos",
		"parrafos" => [
			0 => "El eje de nuestra labor como Inmobiliaria es el buen servicio, por ello en La Cumbre, nuestro equipo se une para brindarte una asesoría integral y de calidad en el arrendamiento de inmuebles y la  venta de propiedad raíz.",
			1 => "Para nosotros será muy gratificante poderte acompañar en este camino de buscar, tu inmueble ideal. ",
			],
	],
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafos" => [
			0 => "En la Cumbre Inmobiliaria trabajamos para que se cumplan los sueños de nuestros clientes,  y encontrar para ellos el inmueble ideal; por ello contamos con un equipo integral, con una excelente calidad humana y gran conocimiento en la administración de inmuebles, venta de propiedad raíz y asesoría jurídica. 	
			Confía en nosotros y déjanos acompañarte en este camino.",
			1 => "",
			],
	],		
];
?>