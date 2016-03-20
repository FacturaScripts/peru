/*
 * This file is part of FacturaSctipts
 * Copyright (C) 2016  Carlos Garcia Gomez  neorazorx@gmail.com
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

var provincia_list = [
{value: 'Amazonas'},
{value: 'Áncash'},
{value: 'Apurímac'},
{value: 'Arequipa'},
{value: 'Ayacucho'},
{value: 'Cajamarca'},
{value: 'Callao'},
{value: 'Cusco'},
{value: 'Huancavelica'},
{value: 'Huánuco'},
{value: 'Ica'},
{value: 'Junín'},
{value: 'La Libertad'},
{value: 'Lambayeque'},
{value: 'Lima'},
{value: 'Loreto'},
{value: 'Madre de Dios'},
{value: 'Moquegua'},
{value: 'Pasco'},
{value: 'Piura'},
{value: 'Puno'},
{value: 'San Martín'},
{value: 'Tacna'},
{value: 'Tumbes'},
{value: 'Ucayali'},
];

$(document).ready(function() {
   $("#ac_provincia, #ac_provincia2").autocomplete({
      lookup: provincia_list,
   });
});
