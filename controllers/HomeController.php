<?php


class HomeController{

   public function indexAction()
   {
        return new View('home', ['titulo'=> 'Ingeniería Web', 'objetivo' => 'Esta
asignatura   aporta   al   perfil   del   Ingeniero   en   Sistemas   Computacionales   las
competencias  profesionales  para  aplicar  procesos,  métodos  y  herramientas/  tecnología
que permitan desarrollar soluciones ágiles de Software Web.', 'intencion' => 'Modulo de especialidad','u1' => 'Fundamentos de la Ingeniería
Web (IWeb)', 'u2' => 'Formulación y Planeación de
IWeb', 'u3' => 'Modelado del Análisis de IWeb', 'u4' => 'Modelado de  Diseño  para
aplicaciones IWeb', 'u5' => 'Pruebas para IWeb']);
   }
}




