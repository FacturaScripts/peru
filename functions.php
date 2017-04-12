<?php

/*
 * This file is part of facturacion_base
 * Copyright (C) 2015-2017  Carlos Garcia Gomez  neorazorx@gmail.com
 * Contributor Ramiro Salvador Mamani solsun.internacional@gmail.com
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if( !function_exists('fs_tipos_id_fiscal') )
{
   /**
    * Devuelve la lista de identificadores fiscales Perú.
    * @return type
    */
   function fs_tipos_id_fiscal()
   {
      return array(FS_CIFNIF,'PASAPORTE','L.E / DNI','CARNET EXT.','RUC','P. NAC.','OTROS');
   }
}
