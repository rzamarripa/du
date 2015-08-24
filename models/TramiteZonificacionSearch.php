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
            [['p1_nombreSolicitante', 'p1_direccionSolicitante', 'p1_telefonoSolicitante', 'p1_correoSolicitante', 'p1_firmaSolicitante', 'p1_usoActual', 'p1_usoSolicitado', 'p1_descriProceso', 'p1_noCajones', 'p2_escrituras', 'p2_reciboDerechos', 'p2_croquisUbicacion', 'p1_callePredio', 'p1_coloniaPredio', 'p1_numeroOficialPredio', 'p1_numeroInteriorPredio', 'p1_pobladoPredio', 'p1_sindicaturaPredio', 'p1_claveCatastralPredio', 'p1_nombrePropietario', 'p1_direccionPropietario', 'p1_telefonoPropietario', 'p1_correoPropietario', 'p1_firmaPropietario', 'p1_observaciones', 'p1_nombreGestor', 'p1_direccionGestor', 'p1_telefonoGestor', 'p1_correoGestor', 'p1_firmaGestor', 'p3_pago', 'p3_escrituras', 'p3_reciboDerechos', 'p3_croquisUbicacion', 'solicitud', 'escrituras', 'reciboDerechos', 'croquisUbicacion', 'p2_pago', 'p4_imprimir'], 'safe'],
            [['p1_superficiePredio', 'p1_nortePredio', 'p1_surPredio', 'p1_orientePredio', 'p1_ponientePredio', 'p1_plantabajaConstruida', 'p1_plantaaltaConstruida', 'p1_segundonivelConstruida', 'p1_otrosConstruida', 'p1_plantabajaXConstruir', 'p1_plantaaltaXConstruir', 'p1_segundonivelXConstruir', 'p1_otrosXConstruir', 'p1_totalConstruida', 'p1_totalXConstruir'], 'number'],
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
        $query -> leftJoin('valoresTramite att_p1_nombreSolicitante', 
                            'att_p1_nombreSolicitante.tramiteId=Tramites.id and att_p1_nombreSolicitante.atributoId=1020');
        $query -> leftJoin('valoresTramite att_p1_direccionSolicitante', 
                            'att_p1_direccionSolicitante.tramiteId=Tramites.id and att_p1_direccionSolicitante.atributoId=1021');
        $query -> leftJoin('valoresTramite att_p1_telefonoSolicitante', 
                            'att_p1_telefonoSolicitante.tramiteId=Tramites.id and att_p1_telefonoSolicitante.atributoId=1022');
        $query -> leftJoin('valoresTramite att_p1_correoSolicitante', 
                            'att_p1_correoSolicitante.tramiteId=Tramites.id and att_p1_correoSolicitante.atributoId=1023');
        $query -> leftJoin('valoresTramite att_p1_firmaSolicitante', 
                            'att_p1_firmaSolicitante.tramiteId=Tramites.id and att_p1_firmaSolicitante.atributoId=1024');
        $query -> leftJoin('valoresTramite att_p1_usoActual', 
                            'att_p1_usoActual.tramiteId=Tramites.id and att_p1_usoActual.atributoId=1025');
        $query -> leftJoin('valoresTramite att_p1_usoSolicitado', 
                            'att_p1_usoSolicitado.tramiteId=Tramites.id and att_p1_usoSolicitado.atributoId=1026');
        $query -> leftJoin('valoresTramite att_p1_descriProceso', 
                            'att_p1_descriProceso.tramiteId=Tramites.id and att_p1_descriProceso.atributoId=1027');
        $query -> leftJoin('valoresTramite att_p1_noCajones', 
                            'att_p1_noCajones.tramiteId=Tramites.id and att_p1_noCajones.atributoId=1028');
        $query -> leftJoin('valoresTramite att_p2_escrituras', 
                            'att_p2_escrituras.tramiteId=Tramites.id and att_p2_escrituras.atributoId=1030');
        $query -> leftJoin('valoresTramite att_p2_reciboDerechos', 
                            'att_p2_reciboDerechos.tramiteId=Tramites.id and att_p2_reciboDerechos.atributoId=1032');
        $query -> leftJoin('valoresTramite att_p2_croquisUbicacion', 
                            'att_p2_croquisUbicacion.tramiteId=Tramites.id and att_p2_croquisUbicacion.atributoId=1034');
        $query -> leftJoin('valoresTramite att_p1_callePredio', 
                            'att_p1_callePredio.tramiteId=Tramites.id and att_p1_callePredio.atributoId=1059');
        $query -> leftJoin('valoresTramite att_p1_coloniaPredio', 
                            'att_p1_coloniaPredio.tramiteId=Tramites.id and att_p1_coloniaPredio.atributoId=1060');
        $query -> leftJoin('valoresTramite att_p1_numeroOficialPredio', 
                            'att_p1_numeroOficialPredio.tramiteId=Tramites.id and att_p1_numeroOficialPredio.atributoId=1061');
        $query -> leftJoin('valoresTramite att_p1_numeroInteriorPredio', 
                            'att_p1_numeroInteriorPredio.tramiteId=Tramites.id and att_p1_numeroInteriorPredio.atributoId=1062');
        $query -> leftJoin('valoresTramite att_p1_pobladoPredio', 
                            'att_p1_pobladoPredio.tramiteId=Tramites.id and att_p1_pobladoPredio.atributoId=1063');
        $query -> leftJoin('valoresTramite att_p1_sindicaturaPredio', 
                            'att_p1_sindicaturaPredio.tramiteId=Tramites.id and att_p1_sindicaturaPredio.atributoId=1064');
        $query -> leftJoin('valoresTramite att_p1_claveCatastralPredio', 
                            'att_p1_claveCatastralPredio.tramiteId=Tramites.id and att_p1_claveCatastralPredio.atributoId=1065');
        $query -> leftJoin('valoresTramite att_p1_superficiePredio', 
                            'att_p1_superficiePredio.tramiteId=Tramites.id and att_p1_superficiePredio.atributoId=1066');
        $query -> leftJoin('valoresTramite att_p1_nortePredio', 
                            'att_p1_nortePredio.tramiteId=Tramites.id and att_p1_nortePredio.atributoId=1067');
        $query -> leftJoin('valoresTramite att_p1_surPredio', 
                            'att_p1_surPredio.tramiteId=Tramites.id and att_p1_surPredio.atributoId=1068');
        $query -> leftJoin('valoresTramite att_p1_orientePredio', 
                            'att_p1_orientePredio.tramiteId=Tramites.id and att_p1_orientePredio.atributoId=1069');
        $query -> leftJoin('valoresTramite att_p1_ponientePredio', 
                            'att_p1_ponientePredio.tramiteId=Tramites.id and att_p1_ponientePredio.atributoId=1070');
        $query -> leftJoin('valoresTramite att_p1_nombrePropietario', 
                            'att_p1_nombrePropietario.tramiteId=Tramites.id and att_p1_nombrePropietario.atributoId=1071');
        $query -> leftJoin('valoresTramite att_p1_direccionPropietario', 
                            'att_p1_direccionPropietario.tramiteId=Tramites.id and att_p1_direccionPropietario.atributoId=1072');
        $query -> leftJoin('valoresTramite att_p1_telefonoPropietario', 
                            'att_p1_telefonoPropietario.tramiteId=Tramites.id and att_p1_telefonoPropietario.atributoId=1073');
        $query -> leftJoin('valoresTramite att_p1_correoPropietario', 
                            'att_p1_correoPropietario.tramiteId=Tramites.id and att_p1_correoPropietario.atributoId=1074');
        $query -> leftJoin('valoresTramite att_p1_firmaPropietario', 
                            'att_p1_firmaPropietario.tramiteId=Tramites.id and att_p1_firmaPropietario.atributoId=1075');
        $query -> leftJoin('valoresTramite att_p1_plantabajaConstruida', 
                            'att_p1_plantabajaConstruida.tramiteId=Tramites.id and att_p1_plantabajaConstruida.atributoId=1076');
        $query -> leftJoin('valoresTramite att_p1_plantaaltaConstruida', 
                            'att_p1_plantaaltaConstruida.tramiteId=Tramites.id and att_p1_plantaaltaConstruida.atributoId=1077');
        $query -> leftJoin('valoresTramite att_p1_segundonivelConstruida', 
                            'att_p1_segundonivelConstruida.tramiteId=Tramites.id and att_p1_segundonivelConstruida.atributoId=1078');
        $query -> leftJoin('valoresTramite att_p1_otrosConstruida', 
                            'att_p1_otrosConstruida.tramiteId=Tramites.id and att_p1_otrosConstruida.atributoId=1079');
        $query -> leftJoin('valoresTramite att_p1_plantabajaXConstruir', 
                            'att_p1_plantabajaXConstruir.tramiteId=Tramites.id and att_p1_plantabajaXConstruir.atributoId=1080');
        $query -> leftJoin('valoresTramite att_p1_plantaaltaXConstruir', 
                            'att_p1_plantaaltaXConstruir.tramiteId=Tramites.id and att_p1_plantaaltaXConstruir.atributoId=1081');
        $query -> leftJoin('valoresTramite att_p1_segundonivelXConstruir', 
                            'att_p1_segundonivelXConstruir.tramiteId=Tramites.id and att_p1_segundonivelXConstruir.atributoId=1083');
        $query -> leftJoin('valoresTramite att_p1_otrosXConstruir', 
                            'att_p1_otrosXConstruir.tramiteId=Tramites.id and att_p1_otrosXConstruir.atributoId=1084');
        $query -> leftJoin('valoresTramite att_p1_totalConstruida', 
                            'att_p1_totalConstruida.tramiteId=Tramites.id and att_p1_totalConstruida.atributoId=1085');
        $query -> leftJoin('valoresTramite att_p1_totalXConstruir', 
                            'att_p1_totalXConstruir.tramiteId=Tramites.id and att_p1_totalXConstruir.atributoId=1086');
        $query -> leftJoin('valoresTramite att_p1_observaciones', 
                            'att_p1_observaciones.tramiteId=Tramites.id and att_p1_observaciones.atributoId=1087');
        $query -> leftJoin('valoresTramite att_p1_nombreGestor', 
                            'att_p1_nombreGestor.tramiteId=Tramites.id and att_p1_nombreGestor.atributoId=1089');
        $query -> leftJoin('valoresTramite att_p1_direccionGestor', 
                            'att_p1_direccionGestor.tramiteId=Tramites.id and att_p1_direccionGestor.atributoId=1090');
        $query -> leftJoin('valoresTramite att_p1_telefonoGestor', 
                            'att_p1_telefonoGestor.tramiteId=Tramites.id and att_p1_telefonoGestor.atributoId=1091');
        $query -> leftJoin('valoresTramite att_p1_correoGestor', 
                            'att_p1_correoGestor.tramiteId=Tramites.id and att_p1_correoGestor.atributoId=1092');
        $query -> leftJoin('valoresTramite att_p1_firmaGestor', 
                            'att_p1_firmaGestor.tramiteId=Tramites.id and att_p1_firmaGestor.atributoId=1093');
        $query -> leftJoin('valoresTramite att_p3_pago', 
                            'att_p3_pago.tramiteId=Tramites.id and att_p3_pago.atributoId=1094');
        $query -> leftJoin('valoresTramite att_p3_escrituras', 
                            'att_p3_escrituras.tramiteId=Tramites.id and att_p3_escrituras.atributoId=1095');
        $query -> leftJoin('valoresTramite att_p3_reciboDerechos', 
                            'att_p3_reciboDerechos.tramiteId=Tramites.id and att_p3_reciboDerechos.atributoId=1096');
        $query -> leftJoin('valoresTramite att_p3_croquisUbicacion', 
                            'att_p3_croquisUbicacion.tramiteId=Tramites.id and att_p3_croquisUbicacion.atributoId=1098');
        $query -> leftJoin('valoresTramite att_solicitud', 
                            'att_solicitud.tramiteId=Tramites.id and att_solicitud.atributoId=1123');
        $query -> leftJoin('valoresTramite att_escrituras', 
                            'att_escrituras.tramiteId=Tramites.id and att_escrituras.atributoId=1124');
        $query -> leftJoin('valoresTramite att_reciboDerechos', 
                            'att_reciboDerechos.tramiteId=Tramites.id and att_reciboDerechos.atributoId=1125');
        $query -> leftJoin('valoresTramite att_croquisUbicacion', 
                            'att_croquisUbicacion.tramiteId=Tramites.id and att_croquisUbicacion.atributoId=1126');
        $query -> leftJoin('valoresTramite att_p2_pago', 
                            'att_p2_pago.tramiteId=Tramites.id and att_p2_pago.atributoId=1127');
        $query -> leftJoin('valoresTramite att_p4_imprimir', 
                            'att_p4_imprimir.tramiteId=Tramites.id and att_p4_imprimir.atributoId=1128');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_p1_superficiePredio' => $this->p1_superficiePredio,
            'att_p1_nortePredio' => $this->p1_nortePredio,
            'att_p1_surPredio' => $this->p1_surPredio,
            'att_p1_orientePredio' => $this->p1_orientePredio,
            'att_p1_ponientePredio' => $this->p1_ponientePredio,
            'att_p1_plantabajaConstruida' => $this->p1_plantabajaConstruida,
            'att_p1_plantaaltaConstruida' => $this->p1_plantaaltaConstruida,
            'att_p1_segundonivelConstruida' => $this->p1_segundonivelConstruida,
            'att_p1_otrosConstruida' => $this->p1_otrosConstruida,
            'att_p1_plantabajaXConstruir' => $this->p1_plantabajaXConstruir,
            'att_p1_plantaaltaXConstruir' => $this->p1_plantaaltaXConstruir,
            'att_p1_segundonivelXConstruir' => $this->p1_segundonivelXConstruir,
            'att_p1_otrosXConstruir' => $this->p1_otrosXConstruir,
            'att_p1_totalConstruida' => $this->p1_totalConstruida,
            'att_p1_totalXConstruir' => $this->p1_totalXConstruir,
        ]);

        $query->andFilterWhere(['like', 'att_p1_nombreSolicitante.valor', $this->p1_nombreSolicitante])
            ->andFilterWhere(['like', 'att_p1_direccionSolicitante.valor', $this->p1_direccionSolicitante])
            ->andFilterWhere(['like', 'att_p1_telefonoSolicitante.valor', $this->p1_telefonoSolicitante])
            ->andFilterWhere(['like', 'att_p1_correoSolicitante.valor', $this->p1_correoSolicitante])
            ->andFilterWhere(['like', 'att_p1_firmaSolicitante.valor', $this->p1_firmaSolicitante])
            ->andFilterWhere(['like', 'att_p1_usoActual.valor', $this->p1_usoActual])
            ->andFilterWhere(['like', 'att_p1_usoSolicitado.valor', $this->p1_usoSolicitado])
            ->andFilterWhere(['like', 'att_p1_descriProceso.valor', $this->p1_descriProceso])
            ->andFilterWhere(['like', 'att_p1_noCajones.valor', $this->p1_noCajones])
            ->andFilterWhere(['like', 'att_p2_escrituras.valor', $this->p2_escrituras])
            ->andFilterWhere(['like', 'att_p2_reciboDerechos.valor', $this->p2_reciboDerechos])
            ->andFilterWhere(['like', 'att_p2_croquisUbicacion.valor', $this->p2_croquisUbicacion])
            ->andFilterWhere(['like', 'att_p1_callePredio.valor', $this->p1_callePredio])
            ->andFilterWhere(['like', 'att_p1_coloniaPredio.valor', $this->p1_coloniaPredio])
            ->andFilterWhere(['like', 'att_p1_numeroOficialPredio.valor', $this->p1_numeroOficialPredio])
            ->andFilterWhere(['like', 'att_p1_numeroInteriorPredio.valor', $this->p1_numeroInteriorPredio])
            ->andFilterWhere(['like', 'att_p1_pobladoPredio.valor', $this->p1_pobladoPredio])
            ->andFilterWhere(['like', 'att_p1_sindicaturaPredio.valor', $this->p1_sindicaturaPredio])
            ->andFilterWhere(['like', 'att_p1_claveCatastralPredio.valor', $this->p1_claveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1_nombrePropietario.valor', $this->p1_nombrePropietario])
            ->andFilterWhere(['like', 'att_p1_direccionPropietario.valor', $this->p1_direccionPropietario])
            ->andFilterWhere(['like', 'att_p1_telefonoPropietario.valor', $this->p1_telefonoPropietario])
            ->andFilterWhere(['like', 'att_p1_correoPropietario.valor', $this->p1_correoPropietario])
            ->andFilterWhere(['like', 'att_p1_firmaPropietario.valor', $this->p1_firmaPropietario])
            ->andFilterWhere(['like', 'att_p1_observaciones.valor', $this->p1_observaciones])
            ->andFilterWhere(['like', 'att_p1_nombreGestor.valor', $this->p1_nombreGestor])
            ->andFilterWhere(['like', 'att_p1_direccionGestor.valor', $this->p1_direccionGestor])
            ->andFilterWhere(['like', 'att_p1_telefonoGestor.valor', $this->p1_telefonoGestor])
            ->andFilterWhere(['like', 'att_p1_correoGestor.valor', $this->p1_correoGestor])
            ->andFilterWhere(['like', 'att_p1_firmaGestor.valor', $this->p1_firmaGestor])
            ->andFilterWhere(['like', 'att_p3_pago.valor', $this->p3_pago])
            ->andFilterWhere(['like', 'att_p3_escrituras.valor', $this->p3_escrituras])
            ->andFilterWhere(['like', 'att_p3_reciboDerechos.valor', $this->p3_reciboDerechos])
            ->andFilterWhere(['like', 'att_p3_croquisUbicacion.valor', $this->p3_croquisUbicacion])
            ->andFilterWhere(['like', 'att_solicitud.valor', $this->solicitud])
            ->andFilterWhere(['like', 'att_escrituras.valor', $this->escrituras])
            ->andFilterWhere(['like', 'att_reciboDerechos.valor', $this->reciboDerechos])
            ->andFilterWhere(['like', 'att_croquisUbicacion.valor', $this->croquisUbicacion])
            ->andFilterWhere(['like', 'att_p2_pago.valor', $this->p2_pago])
            ->andFilterWhere(['like', 'att_p4_imprimir.valor', $this->p4_imprimir]);

        return $dataProvider;
    }
}
