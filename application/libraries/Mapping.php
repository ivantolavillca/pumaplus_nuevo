<?php

class Mapping
{

  public static function map()
  {
    return [
      "1" => "auth@login",
      "2" => "auth@choice",
      "3" => "auth@logout",
      "4" => "auth@logout",
      "5" => "backend/Users@edit",
      "6" => "backend/Password@editas",

      "7" => "home@index",

      ///******RUTAS PROYECTO------------------------------
      "20" => "backend/dashboard@index",
      "21" => "backend/users@index",
      "22" => "backend/groups@index",
      "23" => "backend/maintenance@index",
      "24" => "backend/users@add",
      "25" => "backend/users@export",
      "26" => "backend/groups@edit",
      "27" => "backend/groups@add",
      "28" => "backend/groups@export",




      "30" => "Controller_institucion@admin_autoridad",

      "61" => "Controller_pagina@paginaInicio",
      "68" => "Controller_pagina@stream",
      "62" => "Controller_pagina@login",



      //RUTAS BACKEN STREAM
      "67" => "Controller_administracion@listar_stream",
      "69" => "Controller_administracion@crearStream",
      "70" => "Controller_administracion@editarStream",
      "71" => "Controller_administracion@cambiar_estado_usuario",
      "72" => "Controller_administracion@guardarnuevostream",



      "73" => "Controller_administracion@guardar_stream_editado",

      "74" => "Controller_cliente@clientes",
      "75" => "Controller_venta@ventas",
      "76" => "Controller_traspasos@traspasos",


  "77" => "Controller_proveedores@proveedores",
  "78" => "Controller_precios@precios",
      "90" => "Controller_reporteros_en_accion@index",
      // "91" => "Controller_reporteros_en_accion@crearReportajeReporterosEnAccion",
      // "92" => "Controller_reporteros_en_accion@editarReportajeReporterosEnAcccion",
      // "93" => "Controller_reporteros_en_accion@cambiarEstadorReportajeReporterosRnAccion",


      // "182" => "Controller_administracion@guardar_editado_presentador",
      // "183" => "Controller_administracion@editar_presentador",
      // "184" => "Controller_administracion@eliminar_presentador",
      // "185" => "Controller_administracion@cambiar_estado_presentador",
      // "186" => "Controller_administracion@guardar_presentador",
      // "187" => "Controller_administracion@nueva_presentador",
      // "188" => "Controller_administracion@admin_presentadores",

      // "189" => "Controller_administracion@guardar_editado_autoridad",
      // "190" => "Controller_administracion@editar_autoridad",
      // "191" => "Controller_administracion@eliminar_autoridad",
      // "192" => "Controller_administracion@cambiar_estado_autoridad",
      // "193" => "Controller_administracion@guardar_autoridad",
      // "194" => "Controller_administracion@nueva_autoridad",
      // "195" => "Controller_administracion@admin_autoridades",
      // "196" => "Controller_administracion@guardar_editado_pagina_principal",
      // "197" => "Controller_administracion@editar_pagina_pricipal",
      // "198" => "Controller_pagina@guardar_comentario",
      // "199" => "Controller_pagina@periodicoDiarioDesc",
      // "200" => "Controller_pagina@periodicoDiario",
      // "201" => "Controller_pagina@crearReportajeReporterosEnAccion",
      // "202" => "Controller_pagina@editarReportajeReporterosEnAcccion",
      // "203" => "Controller_pagina@cambiarEstadorReportajeReporterosRnAccion",

      // "215" => "Controller_pagina@mision_vision_valores",

      // "217" => "Controller_pagina@Programas_guion",
      // "218" => "Controller_pagina@destacado_de_hoy",
      // "219" => "Controller_pagina@sector_en_la_u",
      // "220" => "Controller_pagina@tipo_de_noticias",

      // "221" => "Controller_administracion@listar_periodico",
      // "222" => "Controller_administracion@cambiar_estado_categoria_periodico",
      // "223" => "Controller_administracion@eliminar_categoria_periodico",
      // "224" => "Controller_administracion@crear_categoria_periodico",
      // "225" => "Controller_administracion@guardar_categoria_periodico",
      // "226" => "Controller_administracion@editar_categoria_periodico",
      // "227" => "Controller_administracion@guardar_editar_categoria_periodico",



      // "228" => "Controller_administracion@listar_periodicos",
      // "229" => "Controller_administracion@cambiar_estado_periodico",
      // "230" => "Controller_administracion@elimina_periodico",
      // "231" => "Controller_administracion@crear_periodico",
      // "232" => "Controller_administracion@guardar_periodico",
      // "233" => "Controller_administracion@editar_periodico",
      // "234" => "Controller_administracion@guardar_editar_periodico",






      // "240" => "Controller_administracion@listar_programa_guion",
      // "241" => "Controller_administracion@cambiar_estado_programa",
      // "242" => "Controller_administracion@elimina_programa",
      // "243" => "Controller_administracion@crear_programa",
      // "244" => "Controller_administracion@guardar_programa",
      // "245" => "Controller_administracion@editar_programa",
      // "246" => "Controller_administracion@guardar_editar_programa",



      // "250" => "Controller_administracion@listar_tipo_noticia",
      // "251" => "Controller_administracion@cambiar_estado_tipo_noticia",
      // "252" => "Controller_administracion@elimina_tipo_noticia",
      // "253" => "Controller_administracion@crear_tipo_noticia",
      // "254" => "Controller_administracion@guardar_tipo_noticia",
      // "255" => "Controller_administracion@editar_tipo_noticia",
      // "256" => "Controller_administracion@guardar_editar_tipo_noticia",





      // "260" => "Controller_administracion@listar_noticia_videos",
      // "261" => "Controller_administracion@cambiar_estado_noticia",
      // "262" => "Controller_administracion@elimina_noticia",
      // "263" => "Controller_administracion@crear_noticia",
      // "264" => "Controller_administracion@guardar_noticia",
      // "265" => "Controller_administracion@editar_noticia",
      // "266" => "Controller_administracion@guardar_editar_noticia",
      // "267" => "Controller_administracion@reporteros_en_accion",

      // "270" => "Controller_administracion@listar_noticia_imagenes",
      // "271" => "Controller_administracion@cambiar_estado_noticia_imagen",
      // "272" => "Controller_administracion@elimina_noticia_imagen",
      // "273" => "Controller_administracion@crear_noticia_imagen",
      // "274" => "Controller_administracion@guardar_tipo_noticia_imagen",
      // "275" => "Controller_administracion@editar_noticia_imagen",
      // "276" => "Controller_administracion@guardar_editar_noticia_imagen",

      // "280" => "Controller_administracion@listar_periodico_imagenes",
      // "281" => "Controller_administracion@cambiar_estado_periodico_imagen",
      // "282" => "Controller_administracion@elimina_periodico_imagen",
      // "283" => "Controller_administracion@crear_periodico_imagen",
      // "284" => "Controller_administracion@guardar_tipo_periodico_imagen",
      // "285" => "Controller_administracion@editar_periodico_imagen",

      // "286" => "Controller_administracion@guardar_editar_periodico_imagen",
      // "400" => "Controller_pagina@hora_actual",

    ];
  }

  public static function menus()
  {
    $ion = new Ion_auth();
    if ($ion->in_group('members')) {
      $data["members"]["Te perdiste!!!"] = "00000";
    }

    if ($ion->in_group('admin')) {
      $data = [
        "VENTAS" => [
          "LISTADO DE VENTAS" => "75",

        ],
        "COMPRAS" => [
          "USUARIOS" => "67",
        ],
        "TRASPASOS" => [
          "VER TRASPASOS" => "76",
        ],
        "ORDENES COMPRA" => [
          "USUARIOS" => "40000",
        ],
        "PRODUCTOS" => [
          "USUARIOS" => "40000",
        ],
        "PRECIOS" => [
          "PRECIOS POR SUCURSAL" => "78",
        ],
        "CLIENTES" => [
          "LISTADO DE CLIENTES" => "74",
        ],
        "PROVEEDORES" => [
          "VER PROVEEDORES" => "77",
        ],
        "USUARIOS" => [
          "USUARIOS" => "40000",
        ],
        "LISTADOS" => [
          "USUARIOS" => "40000",
        ],
        "REPORTE DE VENTAS" => [
          "USUARIOS" => "40000",
        ],
        "VARIOS" => [
          "USUARIOS" => "40000",
        ],


      ];
    }

    if ($ion->in_group('blogger')) {
      $data = [

        "Administracion Pagina" => [

          "Datos Intitución" => "30",




        ],

        "Administracion Stream" => [


          "streaming" => "67",



        ],

        "Publicaciones" => [

          "Reporteros en Acción" => "90",

          "Categoria Periodico" => "221",
          "Periodicos" => "228",
          "Programas" => "240",
          "Noticias" => "260",

        ],





      ];
    }
    if ($ion->in_group('public_periodico')) {
      $data = [





        "Publicar Periodico" => [


          "Periodicos" => "228",
          "Noticias" => "260",
          "Programas" => "240",

        ],





      ];
    }
    return $data;
  }

  ////   MENUS DE SANTOS LIMACHI

  public static function iconn()
  {
    $vec_iconos = array(
      'vpn_key',
      'vpn_key',
      'group',
      'local_taxi',
      'desktop_mac',
      'grain',
      'widgets',
      'store',
      'subtitles',
      'list',


    );
    return $vec_iconos;
  }
}
