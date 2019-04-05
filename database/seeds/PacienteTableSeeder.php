<?php

use Illuminate\Database\Seeder;
use App\PacienteModel;
class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $paciente = PacienteModel::create([
        'clave_expediente' => 'prueba00',
        'ccurp' => 'LOAG870505HGRPGL01',
        'capaterno' => 'LOPEZ',
        'camaterno' => 'AGUIRRE',
        'cnombre' => 'GILBERTO',
        'cnumexpediente' => 'prueba-00',
        'cnoseguropopular' => '-',
        'cderechohabiencia' => '-',
        'ctiposp' => '-',
        'fchnacimiento' => '1987-05-05',
        'csexo' => 'H',
        'cdireccion' => 'LEONARDO BRAVO S/N',
        'itelefono' => '7341167212',
        'iprospera' => '0',
        'iindigena' => '0',
        'imigrante' => '0',
        'idiscapacitado' => '9',
        'cusuario' => 'gilberto.lopez',
        'ilengua' => '0',
        'ireligion' => '0',
        'inacionalidad' => '223',
        'ilugarnac' => '12',
        'ientidad' => '17',
        'imunicipio' => '1',
        'ilocalidad' => '157034',
        'ctelefono2' => '0',
        'idiscapacidadg' => '9',
        'idiscapacidadm' => '9',
        'isegpop' => '2',
        'cmail' => 'gil.lopez0915@gmail.com',
        'cocupacion' => 'ninguna',
        'iescolaridad' => '5',
        'icivil' => '2',
        // 'fchiniprospera' => '',
        'cfolioprospera' => '',
        'cfolioimss' => '',
        'cfolioissste' => '',
        'cdireccion2' => '',
        'cfoliootra' => '',
        'idcol' => '81727',
        'observaciones' => 'ninguna',
        'iactivo' => '1',
        'ctipo_asentamiento' => '',
        'cnombre_asentamiento' => '',
        'ccodigo_postal' => '62646',
        'idesconocido' => '0',
        'cmotivo' => '',
        'cclues' => 'MSSSA002723',
        'igestacional' => '0',
      ]);
    }
}
