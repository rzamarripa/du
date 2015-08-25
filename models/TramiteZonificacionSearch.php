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
            [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1FirmaSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p2Escrituras', 'p2ReciboDerechos', 'p2CroquisUbicacion', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficialPredio', 'p1NumeroInteriorPredio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CorreoPropietario', 'p1FirmaPropietario', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor', 'p3Pago', 'p3Escrituras', 'p3ReciboDerechos', 'p3CroquisUbicacion', 'p2Pago', 'p4Imprimir'], 'safe'],
            [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantabajaConstruida', 'p1PlantaaltaConstruida', 'p1SegundonivelConstruida', 'p1OtrosConstruida', 'p1PlantabajaXConstruir', 'p1PlantaaltaXConstruir', 'p1SegundonivelXConstruir', 'p1OtrosXConstruir', 'p1TotalConstruida', 'p1TotalXConstruir'], 'number'],
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
        $query -> leftJoin('valoresTramite att_p1NombreSolicitante', 
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1020');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1021');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1022');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1023');
        $query -> leftJoin('valoresTramite att_p1FirmaSolicitante', 
                            'att_p1FirmaSolicitante.tramiteId=Tramites.id and att_p1FirmaSolicitante.atributoId=1024');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1025');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1026');
        $query -> leftJoin('valoresTramite att_p1DescriProceso', 
                            'att_p1DescriProceso.tramiteId=Tramites.id and att_p1DescriProceso.atributoId=1027');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1028');
        $query -> leftJoin('valoresTramite att_p2Escrituras', 
                            'att_p2Escrituras.tramiteId=Tramites.id and att_p2Escrituras.atributoId=1030');
        $query -> leftJoin('valoresTramite att_p2ReciboDerechos', 
                            'att_p2ReciboDerechos.tramiteId=Tramites.id and att_p2ReciboDerechos.atributoId=1032');
        $query -> leftJoin('valoresTramite att_p2CroquisUbicacion', 
                            'att_p2CroquisUbicacion.tramiteId=Tramites.id and att_p2CroquisUbicacion.atributoId=1034');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1059');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1060');
        $query -> leftJoin('valoresTramite att_p1NumeroOficialPredio', 
                            'att_p1NumeroOficialPredio.tramiteId=Tramites.id and att_p1NumeroOficialPredio.atributoId=1061');
        $query -> leftJoin('valoresTramite att_p1NumeroInteriorPredio', 
                            'att_p1NumeroInteriorPredio.tramiteId=Tramites.id and att_p1NumeroInteriorPredio.atributoId=1062');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1063');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1064');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1065');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1066');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1067');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1068');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1069');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1070');
        $query -> leftJoin('valoresTramite att_p1NombrePropietario', 
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=1071');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=1072');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=1073');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietario', 
                            'att_p1CorreoPropietario.tramiteId=Tramites.id and att_p1CorreoPropietario.atributoId=1074');
        $query -> leftJoin('valoresTramite att_p1FirmaPropietario', 
                            'att_p1FirmaPropietario.tramiteId=Tramites.id and att_p1FirmaPropietario.atributoId=1075');
        $query -> leftJoin('valoresTramite att_p1PlantabajaConstruida', 
                            'att_p1PlantabajaConstruida.tramiteId=Tramites.id and att_p1PlantabajaConstruida.atributoId=1076');
        $query -> leftJoin('valoresTramite att_p1PlantaaltaConstruida', 
                            'att_p1PlantaaltaConstruida.tramiteId=Tramites.id and att_p1PlantaaltaConstruida.atributoId=1077');
        $query -> leftJoin('valoresTramite att_p1SegundonivelConstruida', 
                            'att_p1SegundonivelConstruida.tramiteId=Tramites.id and att_p1SegundonivelConstruida.atributoId=1078');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1079');
        $query -> leftJoin('valoresTramite att_p1PlantabajaXConstruir', 
                            'att_p1PlantabajaXConstruir.tramiteId=Tramites.id and att_p1PlantabajaXConstruir.atributoId=1080');
        $query -> leftJoin('valoresTramite att_p1PlantaaltaXConstruir', 
                            'att_p1PlantaaltaXConstruir.tramiteId=Tramites.id and att_p1PlantaaltaXConstruir.atributoId=1081');
        $query -> leftJoin('valoresTramite att_p1SegundonivelXConstruir', 
                            'att_p1SegundonivelXConstruir.tramiteId=Tramites.id and att_p1SegundonivelXConstruir.atributoId=1083');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1084');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1085');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1086');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1087');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1089');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1090');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1091');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1092');
        $query -> leftJoin('valoresTramite att_p1FirmaGestor', 
                            'att_p1FirmaGestor.tramiteId=Tramites.id and att_p1FirmaGestor.atributoId=1093');
        $query -> leftJoin('valoresTramite att_p3Pago', 
                            'att_p3Pago.tramiteId=Tramites.id and att_p3Pago.atributoId=1094');
        $query -> leftJoin('valoresTramite att_p3Escrituras', 
                            'att_p3Escrituras.tramiteId=Tramites.id and att_p3Escrituras.atributoId=1095');
        $query -> leftJoin('valoresTramite att_p3ReciboDerechos', 
                            'att_p3ReciboDerechos.tramiteId=Tramites.id and att_p3ReciboDerechos.atributoId=1096');
        $query -> leftJoin('valoresTramite att_p3CroquisUbicacion', 
                            'att_p3CroquisUbicacion.tramiteId=Tramites.id and att_p3CroquisUbicacion.atributoId=1098');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=1127');
        $query -> leftJoin('valoresTramite att_p4Imprimir', 
                            'att_p4Imprimir.tramiteId=Tramites.id and att_p4Imprimir.atributoId=1128');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_p1SuperficiePredio' => $this->p1SuperficiePredio,
            'att_p1NortePredio' => $this->p1NortePredio,
            'att_p1SurPredio' => $this->p1SurPredio,
            'att_p1OrientePredio' => $this->p1OrientePredio,
            'att_p1PonientePredio' => $this->p1PonientePredio,
            'att_p1PlantabajaConstruida' => $this->p1PlantabajaConstruida,
            'att_p1PlantaaltaConstruida' => $this->p1PlantaaltaConstruida,
            'att_p1SegundonivelConstruida' => $this->p1SegundonivelConstruida,
            'att_p1OtrosConstruida' => $this->p1OtrosConstruida,
            'att_p1PlantabajaXConstruir' => $this->p1PlantabajaXConstruir,
            'att_p1PlantaaltaXConstruir' => $this->p1PlantaaltaXConstruir,
            'att_p1SegundonivelXConstruir' => $this->p1SegundonivelXConstruir,
            'att_p1OtrosXConstruir' => $this->p1OtrosXConstruir,
            'att_p1TotalConstruida' => $this->p1TotalConstruida,
            'att_p1TotalXConstruir' => $this->p1TotalXConstruir,
        ]);

        $query->andFilterWhere(['like', 'att_p1NombreSolicitante.valor', $this->p1NombreSolicitante])
            ->andFilterWhere(['like', 'att_p1DireccionSolicitante.valor', $this->p1DireccionSolicitante])
            ->andFilterWhere(['like', 'att_p1TelefonoSolicitante.valor', $this->p1TelefonoSolicitante])
            ->andFilterWhere(['like', 'att_p1CorreoSolicitante.valor', $this->p1CorreoSolicitante])
            ->andFilterWhere(['like', 'att_p1FirmaSolicitante.valor', $this->p1FirmaSolicitante])
            ->andFilterWhere(['like', 'att_p1UsoActual.valor', $this->p1UsoActual])
            ->andFilterWhere(['like', 'att_p1UsoSolicitado.valor', $this->p1UsoSolicitado])
            ->andFilterWhere(['like', 'att_p1DescriProceso.valor', $this->p1DescriProceso])
            ->andFilterWhere(['like', 'att_p1NoCajones.valor', $this->p1NoCajones])
            ->andFilterWhere(['like', 'att_p2Escrituras.valor', $this->p2Escrituras])
            ->andFilterWhere(['like', 'att_p2ReciboDerechos.valor', $this->p2ReciboDerechos])
            ->andFilterWhere(['like', 'att_p2CroquisUbicacion.valor', $this->p2CroquisUbicacion])
            ->andFilterWhere(['like', 'att_p1CallePredio.valor', $this->p1CallePredio])
            ->andFilterWhere(['like', 'att_p1ColoniaPredio.valor', $this->p1ColoniaPredio])
            ->andFilterWhere(['like', 'att_p1NumeroOficialPredio.valor', $this->p1NumeroOficialPredio])
            ->andFilterWhere(['like', 'att_p1NumeroInteriorPredio.valor', $this->p1NumeroInteriorPredio])
            ->andFilterWhere(['like', 'att_p1PobladoPredio.valor', $this->p1PobladoPredio])
            ->andFilterWhere(['like', 'att_p1SindicaturaPredio.valor', $this->p1SindicaturaPredio])
            ->andFilterWhere(['like', 'att_p1ClaveCatastralPredio.valor', $this->p1ClaveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1NombrePropietario.valor', $this->p1NombrePropietario])
            ->andFilterWhere(['like', 'att_p1DireccionPropietario.valor', $this->p1DireccionPropietario])
            ->andFilterWhere(['like', 'att_p1TelefonoPropietario.valor', $this->p1TelefonoPropietario])
            ->andFilterWhere(['like', 'att_p1CorreoPropietario.valor', $this->p1CorreoPropietario])
            ->andFilterWhere(['like', 'att_p1FirmaPropietario.valor', $this->p1FirmaPropietario])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p1NombreGestor.valor', $this->p1NombreGestor])
            ->andFilterWhere(['like', 'att_p1DireccionGestor.valor', $this->p1DireccionGestor])
            ->andFilterWhere(['like', 'att_p1TelefonoGestor.valor', $this->p1TelefonoGestor])
            ->andFilterWhere(['like', 'att_p1CorreoGestor.valor', $this->p1CorreoGestor])
            ->andFilterWhere(['like', 'att_p1FirmaGestor.valor', $this->p1FirmaGestor])
            ->andFilterWhere(['like', 'att_p3Pago.valor', $this->p3Pago])
            ->andFilterWhere(['like', 'att_p3Escrituras.valor', $this->p3Escrituras])
            ->andFilterWhere(['like', 'att_p3ReciboDerechos.valor', $this->p3ReciboDerechos])
            ->andFilterWhere(['like', 'att_p3CroquisUbicacion.valor', $this->p3CroquisUbicacion])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p4Imprimir.valor', $this->p4Imprimir]);

        return $dataProvider;
    }
}
