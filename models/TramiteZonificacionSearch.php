<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramiteZonificacion;

/**
 * TramiteZonificacionSearch represents the model behind the search form about `app\models\TramiteZonificacion`.
 */
class TramiteZonificacionSearch extends TramiteZonificacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['constanciaZonificacion', 'contruccionNueva', 'ampliacion', 'remodelacion', 'regularizacion', 'aperturaEmpresa', 'licUsoSuelo', 'relotificacion', 'autorizacionFracc', 'regimenCondominio', 'certificadoOcupacion', 'otros', 'especifique', 'nombre', 'direccion', 'telefono', 'correo', 'firma', 'usoActual', 'usoSolicitado', 'descripcionProceso', 'cajonesEstacionamiento', 'solicitud', 'escrituras', 'claveCatastral', 'reciboDerechos', 'estadoPredial', 'croquisUbicacion', 'alineamiento', 'croquisActual', 'copiaPropuestaRelitificacion', 'predioCuadroConstruccion', 'copiasProyecto', 'constanciaZonificacion2', 'calculoEstructural', 'constanciaTramiteTelmex', 'serviciosJapac', 'servicioCFE', 'dictamenAmbiental', 'dictamenVial', 'opinionBomberos', 'dictamenPC', 'dictamenINAH', 'dictamenSEPyC', 'anuenciaTortilla', 'aprovacionAeronautica', 'anuenciaVecinos', 'polizaSeguro', 'dictamenCultural', 'otros1', 'otros2', 'otros3', 'calle', 'coloniaFraccionamiento', 'numeroOficial', 'numeroInterior', 'poblado', 'sindicatura', 'claveCatastral2', 'nombreSolicitante', 'direccionSolicitante', 'telefonoSolicitante', 'correoSolicitante', 'firmaSolicitante', 'observaciones', 'sellos', 'nombreGestor', 'direccionGestor', 'telefonoGestor', 'correoGestor', 'firmaGestor'], 'safe'],
            [['superficiePredio', 'norte', 'sur', 'oriente', 'poniente', 'plantaBaja', 'plantaAlta', 'segundoNivel', 'otros4', 'plantaBaja1', 'plantaAlta1', 'plantaAlta2', 'segundoNivel1', 'otros5', 'total', 'total1'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TramiteZonificacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_constanciaZonificacion', 
                            'att_constanciaZonificacion.tramiteId=Tramites.id and att_constanciaZonificacion.atributoId=1007');
        $query -> leftJoin('valoresTramite att_contruccionNueva', 
                            'att_contruccionNueva.tramiteId=Tramites.id and att_contruccionNueva.atributoId=1008');
        $query -> leftJoin('valoresTramite att_ampliacion', 
                            'att_ampliacion.tramiteId=Tramites.id and att_ampliacion.atributoId=1009');
        $query -> leftJoin('valoresTramite att_remodelacion', 
                            'att_remodelacion.tramiteId=Tramites.id and att_remodelacion.atributoId=1010');
        $query -> leftJoin('valoresTramite att_regularizacion', 
                            'att_regularizacion.tramiteId=Tramites.id and att_regularizacion.atributoId=1011');
        $query -> leftJoin('valoresTramite att_aperturaEmpresa', 
                            'att_aperturaEmpresa.tramiteId=Tramites.id and att_aperturaEmpresa.atributoId=1012');
        $query -> leftJoin('valoresTramite att_licUsoSuelo', 
                            'att_licUsoSuelo.tramiteId=Tramites.id and att_licUsoSuelo.atributoId=1013');
        $query -> leftJoin('valoresTramite att_relotificacion', 
                            'att_relotificacion.tramiteId=Tramites.id and att_relotificacion.atributoId=1014');
        $query -> leftJoin('valoresTramite att_autorizacionFracc', 
                            'att_autorizacionFracc.tramiteId=Tramites.id and att_autorizacionFracc.atributoId=1015');
        $query -> leftJoin('valoresTramite att_regimenCondominio', 
                            'att_regimenCondominio.tramiteId=Tramites.id and att_regimenCondominio.atributoId=1016');
        $query -> leftJoin('valoresTramite att_certificadoOcupacion', 
                            'att_certificadoOcupacion.tramiteId=Tramites.id and att_certificadoOcupacion.atributoId=1017');
        $query -> leftJoin('valoresTramite att_otros', 
                            'att_otros.tramiteId=Tramites.id and att_otros.atributoId=1018');
        $query -> leftJoin('valoresTramite att_especifique', 
                            'att_especifique.tramiteId=Tramites.id and att_especifique.atributoId=1019');
        $query -> leftJoin('valoresTramite att_nombre', 
                            'att_nombre.tramiteId=Tramites.id and att_nombre.atributoId=1020');
        $query -> leftJoin('valoresTramite att_direccion', 
                            'att_direccion.tramiteId=Tramites.id and att_direccion.atributoId=1021');
        $query -> leftJoin('valoresTramite att_telefono', 
                            'att_telefono.tramiteId=Tramites.id and att_telefono.atributoId=1022');
        $query -> leftJoin('valoresTramite att_correo', 
                            'att_correo.tramiteId=Tramites.id and att_correo.atributoId=1023');
        $query -> leftJoin('valoresTramite att_firma', 
                            'att_firma.tramiteId=Tramites.id and att_firma.atributoId=1024');
        $query -> leftJoin('valoresTramite att_usoActual', 
                            'att_usoActual.tramiteId=Tramites.id and att_usoActual.atributoId=1025');
        $query -> leftJoin('valoresTramite att_usoSolicitado', 
                            'att_usoSolicitado.tramiteId=Tramites.id and att_usoSolicitado.atributoId=1026');
        $query -> leftJoin('valoresTramite att_descripcionProceso', 
                            'att_descripcionProceso.tramiteId=Tramites.id and att_descripcionProceso.atributoId=1027');
        $query -> leftJoin('valoresTramite att_cajonesEstacionamiento', 
                            'att_cajonesEstacionamiento.tramiteId=Tramites.id and att_cajonesEstacionamiento.atributoId=1028');
        $query -> leftJoin('valoresTramite att_solicitud', 
                            'att_solicitud.tramiteId=Tramites.id and att_solicitud.atributoId=1029');
        $query -> leftJoin('valoresTramite att_escrituras', 
                            'att_escrituras.tramiteId=Tramites.id and att_escrituras.atributoId=1030');
        $query -> leftJoin('valoresTramite att_claveCatastral', 
                            'att_claveCatastral.tramiteId=Tramites.id and att_claveCatastral.atributoId=1031');
        $query -> leftJoin('valoresTramite att_reciboDerechos', 
                            'att_reciboDerechos.tramiteId=Tramites.id and att_reciboDerechos.atributoId=1032');
        $query -> leftJoin('valoresTramite att_estadoPredial', 
                            'att_estadoPredial.tramiteId=Tramites.id and att_estadoPredial.atributoId=1033');
        $query -> leftJoin('valoresTramite att_croquisUbicacion', 
                            'att_croquisUbicacion.tramiteId=Tramites.id and att_croquisUbicacion.atributoId=1034');
        $query -> leftJoin('valoresTramite att_alineamiento', 
                            'att_alineamiento.tramiteId=Tramites.id and att_alineamiento.atributoId=1035');
        $query -> leftJoin('valoresTramite att_croquisActual', 
                            'att_croquisActual.tramiteId=Tramites.id and att_croquisActual.atributoId=1036');
        $query -> leftJoin('valoresTramite att_copiaPropuestaRelitificacion', 
                            'att_copiaPropuestaRelitificacion.tramiteId=Tramites.id and att_copiaPropuestaRelitificacion.atributoId=1037');
        $query -> leftJoin('valoresTramite att_predioCuadroConstruccion', 
                            'att_predioCuadroConstruccion.tramiteId=Tramites.id and att_predioCuadroConstruccion.atributoId=1038');
        $query -> leftJoin('valoresTramite att_copiasProyecto', 
                            'att_copiasProyecto.tramiteId=Tramites.id and att_copiasProyecto.atributoId=1039');
        $query -> leftJoin('valoresTramite att_constanciaZonificacion2', 
                            'att_constanciaZonificacion2.tramiteId=Tramites.id and att_constanciaZonificacion2.atributoId=1040');
        $query -> leftJoin('valoresTramite att_calculoEstructural', 
                            'att_calculoEstructural.tramiteId=Tramites.id and att_calculoEstructural.atributoId=1041');
        $query -> leftJoin('valoresTramite att_constanciaTramiteTelmex', 
                            'att_constanciaTramiteTelmex.tramiteId=Tramites.id and att_constanciaTramiteTelmex.atributoId=1042');
        $query -> leftJoin('valoresTramite att_serviciosJapac', 
                            'att_serviciosJapac.tramiteId=Tramites.id and att_serviciosJapac.atributoId=1043');
        $query -> leftJoin('valoresTramite att_servicioCFE', 
                            'att_servicioCFE.tramiteId=Tramites.id and att_servicioCFE.atributoId=1044');
        $query -> leftJoin('valoresTramite att_dictamenAmbiental', 
                            'att_dictamenAmbiental.tramiteId=Tramites.id and att_dictamenAmbiental.atributoId=1045');
        $query -> leftJoin('valoresTramite att_dictamenVial', 
                            'att_dictamenVial.tramiteId=Tramites.id and att_dictamenVial.atributoId=1046');
        $query -> leftJoin('valoresTramite att_opinionBomberos', 
                            'att_opinionBomberos.tramiteId=Tramites.id and att_opinionBomberos.atributoId=1047');
        $query -> leftJoin('valoresTramite att_dictamenPC', 
                            'att_dictamenPC.tramiteId=Tramites.id and att_dictamenPC.atributoId=1048');
        $query -> leftJoin('valoresTramite att_dictamenINAH', 
                            'att_dictamenINAH.tramiteId=Tramites.id and att_dictamenINAH.atributoId=1049');
        $query -> leftJoin('valoresTramite att_dictamenSEPyC', 
                            'att_dictamenSEPyC.tramiteId=Tramites.id and att_dictamenSEPyC.atributoId=1050');
        $query -> leftJoin('valoresTramite att_anuenciaTortilla', 
                            'att_anuenciaTortilla.tramiteId=Tramites.id and att_anuenciaTortilla.atributoId=1051');
        $query -> leftJoin('valoresTramite att_aprovacionAeronautica', 
                            'att_aprovacionAeronautica.tramiteId=Tramites.id and att_aprovacionAeronautica.atributoId=1052');
        $query -> leftJoin('valoresTramite att_anuenciaVecinos', 
                            'att_anuenciaVecinos.tramiteId=Tramites.id and att_anuenciaVecinos.atributoId=1053');
        $query -> leftJoin('valoresTramite att_polizaSeguro', 
                            'att_polizaSeguro.tramiteId=Tramites.id and att_polizaSeguro.atributoId=1054');
        $query -> leftJoin('valoresTramite att_dictamenCultural', 
                            'att_dictamenCultural.tramiteId=Tramites.id and att_dictamenCultural.atributoId=1055');
        $query -> leftJoin('valoresTramite att_otros1', 
                            'att_otros1.tramiteId=Tramites.id and att_otros1.atributoId=1056');
        $query -> leftJoin('valoresTramite att_otros2', 
                            'att_otros2.tramiteId=Tramites.id and att_otros2.atributoId=1057');
        $query -> leftJoin('valoresTramite att_otros3', 
                            'att_otros3.tramiteId=Tramites.id and att_otros3.atributoId=1058');
        $query -> leftJoin('valoresTramite att_calle', 
                            'att_calle.tramiteId=Tramites.id and att_calle.atributoId=1059');
        $query -> leftJoin('valoresTramite att_coloniaFraccionamiento', 
                            'att_coloniaFraccionamiento.tramiteId=Tramites.id and att_coloniaFraccionamiento.atributoId=1060');
        $query -> leftJoin('valoresTramite att_numeroOficial', 
                            'att_numeroOficial.tramiteId=Tramites.id and att_numeroOficial.atributoId=1061');
        $query -> leftJoin('valoresTramite att_numeroInterior', 
                            'att_numeroInterior.tramiteId=Tramites.id and att_numeroInterior.atributoId=1062');
        $query -> leftJoin('valoresTramite att_poblado', 
                            'att_poblado.tramiteId=Tramites.id and att_poblado.atributoId=1063');
        $query -> leftJoin('valoresTramite att_sindicatura', 
                            'att_sindicatura.tramiteId=Tramites.id and att_sindicatura.atributoId=1064');
        $query -> leftJoin('valoresTramite att_claveCatastral2', 
                            'att_claveCatastral2.tramiteId=Tramites.id and att_claveCatastral2.atributoId=1065');
        $query -> leftJoin('valoresTramite att_superficiePredio', 
                            'att_superficiePredio.tramiteId=Tramites.id and att_superficiePredio.atributoId=1066');
        $query -> leftJoin('valoresTramite att_norte', 
                            'att_norte.tramiteId=Tramites.id and att_norte.atributoId=1067');
        $query -> leftJoin('valoresTramite att_sur', 
                            'att_sur.tramiteId=Tramites.id and att_sur.atributoId=1068');
        $query -> leftJoin('valoresTramite att_oriente', 
                            'att_oriente.tramiteId=Tramites.id and att_oriente.atributoId=1069');
        $query -> leftJoin('valoresTramite att_poniente', 
                            'att_poniente.tramiteId=Tramites.id and att_poniente.atributoId=1070');
        $query -> leftJoin('valoresTramite att_nombreSolicitante', 
                            'att_nombreSolicitante.tramiteId=Tramites.id and att_nombreSolicitante.atributoId=1071');
        $query -> leftJoin('valoresTramite att_direccionSolicitante', 
                            'att_direccionSolicitante.tramiteId=Tramites.id and att_direccionSolicitante.atributoId=1072');
        $query -> leftJoin('valoresTramite att_telefonoSolicitante', 
                            'att_telefonoSolicitante.tramiteId=Tramites.id and att_telefonoSolicitante.atributoId=1073');
        $query -> leftJoin('valoresTramite att_correoSolicitante', 
                            'att_correoSolicitante.tramiteId=Tramites.id and att_correoSolicitante.atributoId=1074');
        $query -> leftJoin('valoresTramite att_firmaSolicitante', 
                            'att_firmaSolicitante.tramiteId=Tramites.id and att_firmaSolicitante.atributoId=1075');
        $query -> leftJoin('valoresTramite att_plantaBaja', 
                            'att_plantaBaja.tramiteId=Tramites.id and att_plantaBaja.atributoId=1076');
        $query -> leftJoin('valoresTramite att_plantaAlta', 
                            'att_plantaAlta.tramiteId=Tramites.id and att_plantaAlta.atributoId=1077');
        $query -> leftJoin('valoresTramite att_segundoNivel', 
                            'att_segundoNivel.tramiteId=Tramites.id and att_segundoNivel.atributoId=1078');
        $query -> leftJoin('valoresTramite att_otros4', 
                            'att_otros4.tramiteId=Tramites.id and att_otros4.atributoId=1079');
        $query -> leftJoin('valoresTramite att_plantaBaja1', 
                            'att_plantaBaja1.tramiteId=Tramites.id and att_plantaBaja1.atributoId=1080');
        $query -> leftJoin('valoresTramite att_plantaAlta1', 
                            'att_plantaAlta1.tramiteId=Tramites.id and att_plantaAlta1.atributoId=1081');
        $query -> leftJoin('valoresTramite att_plantaAlta2', 
                            'att_plantaAlta2.tramiteId=Tramites.id and att_plantaAlta2.atributoId=1082');
        $query -> leftJoin('valoresTramite att_segundoNivel1', 
                            'att_segundoNivel1.tramiteId=Tramites.id and att_segundoNivel1.atributoId=1083');
        $query -> leftJoin('valoresTramite att_otros5', 
                            'att_otros5.tramiteId=Tramites.id and att_otros5.atributoId=1084');
        $query -> leftJoin('valoresTramite att_total', 
                            'att_total.tramiteId=Tramites.id and att_total.atributoId=1085');
        $query -> leftJoin('valoresTramite att_total1', 
                            'att_total1.tramiteId=Tramites.id and att_total1.atributoId=1086');
        $query -> leftJoin('valoresTramite att_observaciones', 
                            'att_observaciones.tramiteId=Tramites.id and att_observaciones.atributoId=1087');
        $query -> leftJoin('valoresTramite att_sellos', 
                            'att_sellos.tramiteId=Tramites.id and att_sellos.atributoId=1088');
        $query -> leftJoin('valoresTramite att_nombreGestor', 
                            'att_nombreGestor.tramiteId=Tramites.id and att_nombreGestor.atributoId=1089');
        $query -> leftJoin('valoresTramite att_direccionGestor', 
                            'att_direccionGestor.tramiteId=Tramites.id and att_direccionGestor.atributoId=1090');
        $query -> leftJoin('valoresTramite att_telefonoGestor', 
                            'att_telefonoGestor.tramiteId=Tramites.id and att_telefonoGestor.atributoId=1091');
        $query -> leftJoin('valoresTramite att_correoGestor', 
                            'att_correoGestor.tramiteId=Tramites.id and att_correoGestor.atributoId=1092');
        $query -> leftJoin('valoresTramite att_firmaGestor', 
                            'att_firmaGestor.tramiteId=Tramites.id and att_firmaGestor.atributoId=1093');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_superficiePredio' => $this->superficiePredio,
            'att_norte' => $this->norte,
            'att_sur' => $this->sur,
            'att_oriente' => $this->oriente,
            'att_poniente' => $this->poniente,
            'att_plantaBaja' => $this->plantaBaja,
            'att_plantaAlta' => $this->plantaAlta,
            'att_segundoNivel' => $this->segundoNivel,
            'att_otros4' => $this->otros4,
            'att_plantaBaja1' => $this->plantaBaja1,
            'att_plantaAlta1' => $this->plantaAlta1,
            'att_plantaAlta2' => $this->plantaAlta2,
            'att_segundoNivel1' => $this->segundoNivel1,
            'att_otros5' => $this->otros5,
            'att_total' => $this->total,
            'att_total1' => $this->total1,
        ]);

        $query->andFilterWhere(['like', 'att_constanciaZonificacion.valor', $this->constanciaZonificacion])
            ->andFilterWhere(['like', 'att_contruccionNueva.valor', $this->contruccionNueva])
            ->andFilterWhere(['like', 'att_ampliacion.valor', $this->ampliacion])
            ->andFilterWhere(['like', 'att_remodelacion.valor', $this->remodelacion])
            ->andFilterWhere(['like', 'att_regularizacion.valor', $this->regularizacion])
            ->andFilterWhere(['like', 'att_aperturaEmpresa.valor', $this->aperturaEmpresa])
            ->andFilterWhere(['like', 'att_licUsoSuelo.valor', $this->licUsoSuelo])
            ->andFilterWhere(['like', 'att_relotificacion.valor', $this->relotificacion])
            ->andFilterWhere(['like', 'att_autorizacionFracc.valor', $this->autorizacionFracc])
            ->andFilterWhere(['like', 'att_regimenCondominio.valor', $this->regimenCondominio])
            ->andFilterWhere(['like', 'att_certificadoOcupacion.valor', $this->certificadoOcupacion])
            ->andFilterWhere(['like', 'att_otros.valor', $this->otros])
            ->andFilterWhere(['like', 'att_especifique.valor', $this->especifique])
            ->andFilterWhere(['like', 'att_nombre.valor', $this->nombre])
            ->andFilterWhere(['like', 'att_direccion.valor', $this->direccion])
            ->andFilterWhere(['like', 'att_telefono.valor', $this->telefono])
            ->andFilterWhere(['like', 'att_correo.valor', $this->correo])
            ->andFilterWhere(['like', 'att_firma.valor', $this->firma])
            ->andFilterWhere(['like', 'att_usoActual.valor', $this->usoActual])
            ->andFilterWhere(['like', 'att_usoSolicitado.valor', $this->usoSolicitado])
            ->andFilterWhere(['like', 'att_descripcionProceso.valor', $this->descripcionProceso])
            ->andFilterWhere(['like', 'att_cajonesEstacionamiento.valor', $this->cajonesEstacionamiento])
            ->andFilterWhere(['like', 'att_solicitud.valor', $this->solicitud])
            ->andFilterWhere(['like', 'att_escrituras.valor', $this->escrituras])
            ->andFilterWhere(['like', 'att_claveCatastral.valor', $this->claveCatastral])
            ->andFilterWhere(['like', 'att_reciboDerechos.valor', $this->reciboDerechos])
            ->andFilterWhere(['like', 'att_estadoPredial.valor', $this->estadoPredial])
            ->andFilterWhere(['like', 'att_croquisUbicacion.valor', $this->croquisUbicacion])
            ->andFilterWhere(['like', 'att_alineamiento.valor', $this->alineamiento])
            ->andFilterWhere(['like', 'att_croquisActual.valor', $this->croquisActual])
            ->andFilterWhere(['like', 'att_copiaPropuestaRelitificacion.valor', $this->copiaPropuestaRelitificacion])
            ->andFilterWhere(['like', 'att_predioCuadroConstruccion.valor', $this->predioCuadroConstruccion])
            ->andFilterWhere(['like', 'att_copiasProyecto.valor', $this->copiasProyecto])
            ->andFilterWhere(['like', 'att_constanciaZonificacion2.valor', $this->constanciaZonificacion2])
            ->andFilterWhere(['like', 'att_calculoEstructural.valor', $this->calculoEstructural])
            ->andFilterWhere(['like', 'att_constanciaTramiteTelmex.valor', $this->constanciaTramiteTelmex])
            ->andFilterWhere(['like', 'att_serviciosJapac.valor', $this->serviciosJapac])
            ->andFilterWhere(['like', 'att_servicioCFE.valor', $this->servicioCFE])
            ->andFilterWhere(['like', 'att_dictamenAmbiental.valor', $this->dictamenAmbiental])
            ->andFilterWhere(['like', 'att_dictamenVial.valor', $this->dictamenVial])
            ->andFilterWhere(['like', 'att_opinionBomberos.valor', $this->opinionBomberos])
            ->andFilterWhere(['like', 'att_dictamenPC.valor', $this->dictamenPC])
            ->andFilterWhere(['like', 'att_dictamenINAH.valor', $this->dictamenINAH])
            ->andFilterWhere(['like', 'att_dictamenSEPyC.valor', $this->dictamenSEPyC])
            ->andFilterWhere(['like', 'att_anuenciaTortilla.valor', $this->anuenciaTortilla])
            ->andFilterWhere(['like', 'att_aprovacionAeronautica.valor', $this->aprovacionAeronautica])
            ->andFilterWhere(['like', 'att_anuenciaVecinos.valor', $this->anuenciaVecinos])
            ->andFilterWhere(['like', 'att_polizaSeguro.valor', $this->polizaSeguro])
            ->andFilterWhere(['like', 'att_dictamenCultural.valor', $this->dictamenCultural])
            ->andFilterWhere(['like', 'att_otros1.valor', $this->otros1])
            ->andFilterWhere(['like', 'att_otros2.valor', $this->otros2])
            ->andFilterWhere(['like', 'att_otros3.valor', $this->otros3])
            ->andFilterWhere(['like', 'att_calle.valor', $this->calle])
            ->andFilterWhere(['like', 'att_coloniaFraccionamiento.valor', $this->coloniaFraccionamiento])
            ->andFilterWhere(['like', 'att_numeroOficial.valor', $this->numeroOficial])
            ->andFilterWhere(['like', 'att_numeroInterior.valor', $this->numeroInterior])
            ->andFilterWhere(['like', 'att_poblado.valor', $this->poblado])
            ->andFilterWhere(['like', 'att_sindicatura.valor', $this->sindicatura])
            ->andFilterWhere(['like', 'att_claveCatastral2.valor', $this->claveCatastral2])
            ->andFilterWhere(['like', 'att_nombreSolicitante.valor', $this->nombreSolicitante])
            ->andFilterWhere(['like', 'att_direccionSolicitante.valor', $this->direccionSolicitante])
            ->andFilterWhere(['like', 'att_telefonoSolicitante.valor', $this->telefonoSolicitante])
            ->andFilterWhere(['like', 'att_correoSolicitante.valor', $this->correoSolicitante])
            ->andFilterWhere(['like', 'att_firmaSolicitante.valor', $this->firmaSolicitante])
            ->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_sellos.valor', $this->sellos])
            ->andFilterWhere(['like', 'att_nombreGestor.valor', $this->nombreGestor])
            ->andFilterWhere(['like', 'att_direccionGestor.valor', $this->direccionGestor])
            ->andFilterWhere(['like', 'att_telefonoGestor.valor', $this->telefonoGestor])
            ->andFilterWhere(['like', 'att_correoGestor.valor', $this->correoGestor])
            ->andFilterWhere(['like', 'att_firmaGestor.valor', $this->firmaGestor]);

        return $dataProvider;
    }
}
