<?php

/*
 * This file is part of FacturaSctipts
 * Copyright (C) 2015-2016  Carlos Garcia Gomez  neorazorx@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_model('divisa.php');
require_model('impuesto.php');
require_model('pais.php');

/**
 * Description of admin_peru
 *
 * @author carlos
 */
class admin_peru extends fs_controller
{
   public function __construct()
   {
      parent::__construct(__CLASS__, 'Perú', 'admin');
   }
   
   protected function private_core()
   {
      $this->share_extensions();
      
      if( isset($_GET['opcion']) )
      {
         if($_GET['opcion'] == 'moneda')
         {
            $div0 = new divisa();
            $divisa = $div0->get('PEN');
            if(!$divisa)
            {
               $div0->coddivisa = 'PEN';
               $div0->codiso = '604';
               $div0->descripcion = 'NUEVOS SOLES';
               $div0->simbolo = 'S/.';
               $div0->tasaconv = 3.4272;
               $div0->save();
            }
            
            $this->empresa->coddivisa = 'PEN';
            if( $this->empresa->save() )
            {
               $this->new_message('Datos guardados correctamente.');
            }
         }
         else if($_GET['opcion'] == 'pais')
         {
            $pais0 = new pais();
            $pais = $pais0->get('PER');
            if(!$pais)
            {
               $pais0->codpais = 'PER';
               $pais0->codiso = 'PE';
               $pais0->nombre = 'Perú';
               $pais0->save();
            }
            
            $this->empresa->codpais = 'PER';
            if( $this->empresa->save() )
            {
               $this->new_message('Datos guardados correctamente.');
            }
         }
         else if($_GET['opcion'] == 'impuestos')
         {
            /// elimino todos los impuestos
            $impuesto = new impuesto();
            foreach($impuesto->all() as $imp)
            {
               $imp->delete();
            }
            
            /// añadimos el IGV 18%
            $impuesto->codimpuesto = 'IGV';
            $impuesto->descripcion = 'IGV 18%';
            $impuesto->iva = 18;
            $impuesto->save();
            
            $this->new_message('Impuestos modificados correctamente.');
         }
      }
   }
   
   private function share_extensions()
   {
      $fsext = new fs_extension();
      $fsext->name = 'pcge_peru';
      $fsext->from = __CLASS__;
      $fsext->to = 'contabilidad_ejercicio';
      $fsext->type = 'fuente';
      $fsext->text = 'PCGE Perú';
      $fsext->params = 'plugins/peru/extras/peru.xml';
      $fsext->save();
   }
}
