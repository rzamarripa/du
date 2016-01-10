<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramiteRelotificacion;

/**
 * TramiteRelotificacionSearch represents the model behind the search form about `app\models\TramiteRelotificacion`.
 */
class TramiteRelotificacionSearch extends TramiteRelotificacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1Observaciones', 'p1Sellos', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor', 'p2Escrituras', 'p2ReciboDerechos', 'p2CroquisUbicacion', 'p2Pago', 'p2Alineamiento', 'p2PropuestaRelotificacion', 'p3Escrituras', 'p3ReciboDerechos', 'p3CroquisUbicacion', 'p3Pago', 'p3Alineamiento', 'p3PropuestaRelotificacion', 'p4Imprimir'], 'safe'],
            [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaAltaXConstruir', 'p1PlantaBajaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'number'],
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
        $query = TramiteRelotificacion::find();

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
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1199');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1200');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1201');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1202');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1203');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1204');
        $query -> leftJoin('valoresTramite att_p1DescriProceso', 
                            'att_p1DescriProceso.tramiteId=Tramites.id and att_p1DescriProceso.atributoId=1205');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1206');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1207');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1208');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1209');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1210');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1211');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1212');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1213');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1214');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1215');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1216');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1217');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1218');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1219');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1220');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1221');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1222');
        $query -> leftJoin('valoresTramite att_p1FirmaSolicitante', 
                            'att_p1FirmaSolicitante.tramiteId=Tramites.id and att_p1FirmaSolicitante.atributoId=1223');
        $query -> leftJoin('valoresTramite att_p1FirmaPropietarios', 
                            'att_p1FirmaPropietarios.tramiteId=Tramites.id and att_p1FirmaPropietarios.atributoId=1224');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1225');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1226');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1227');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1228');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1229');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1230');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1231');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1232');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1233');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1234');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1235');
        $query -> leftJoin('valoresTramite att_p1Sellos', 
                            'att_p1Sellos.tramiteId=Tramites.id and att_p1Sellos.atributoId=1236');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1237');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1238');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1239');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1240');
        $query -> leftJoin('valoresTramite att_p1FirmaGestor', 
                            'att_p1FirmaGestor.tramiteId=Tramites.id and att_p1FirmaGestor.atributoId=1241');
        $query -> leftJoin('valoresTramite att_p2Escrituras', 
                            'att_p2Escrituras.tramiteId=Tramites.id and att_p2Escrituras.atributoId=1244');
        $query -> leftJoin('valoresTramite att_p2ReciboDerechos', 
                            'att_p2ReciboDerechos.tramiteId=Tramites.id and att_p2ReciboDerechos.atributoId=1245');
        $query -> leftJoin('valoresTramite att_p2CroquisUbicacion', 
                            'att_p2CroquisUbicacion.tramiteId=Tramites.id and att_p2CroquisUbicacion.atributoId=1246');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=1247');
        $query -> leftJoin('valoresTramite att_p2Alineamiento', 
                            'att_p2Alineamiento.tramiteId=Tramites.id and att_p2Alineamiento.atributoId=1248');
        $query -> leftJoin('valoresTramite att_p2PropuestaRelotificacion', 
                            'att_p2PropuestaRelotificacion.tramiteId=Tramites.id and att_p2PropuestaRelotificacion.atributoId=1249');
        $query -> leftJoin('valoresTramite att_p3Escrituras', 
                            'att_p3Escrituras.tramiteId=Tramites.id and att_p3Escrituras.atributoId=1250');
        $query -> leftJoin('valoresTramite att_p3ReciboDerechos', 
                            'att_p3ReciboDerechos.tramiteId=Tramites.id and att_p3ReciboDerechos.atributoId=1251');
        $query -> leftJoin('valoresTramite att_p3CroquisUbicacion', 
                            'att_p3CroquisUbicacion.tramiteId=Tramites.id and att_p3CroquisUbicacion.atributoId=1252');
        $query -> leftJoin('valoresTramite att_p3Pago', 
                            'att_p3Pago.tramiteId=Tramites.id and att_p3Pago.atributoId=1253');
        $query -> leftJoin('valoresTramite att_p3Alineamiento', 
                            'att_p3Alineamiento.tramiteId=Tramites.id and att_p3Alineamiento.atributoId=1254');
        $query -> leftJoin('valoresTramite att_p3PropuestaRelotificacion', 
                            'att_p3PropuestaRelotificacion.tramiteId=Tramites.id and att_p3PropuestaRelotificacion.atributoId=1255');
        $query -> leftJoin('valoresTramite att_p4Imprimir', 
                            'att_p4Imprimir.tramiteId=Tramites.id and att_p4Imprimir.atributoId=1256');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_p1SuperficiePredio' => $this->p1SuperficiePredio,
            'att_p1NortePredio' => $this->p1NortePredio,
            'att_p1SurPredio' => $this->p1SurPredio,
            'att_p1OrientePredio' => $this->p1OrientePredio,
            'att_p1PonientePredio' => $this->p1PonientePredio,
            'att_p1PlantaBajaConstruida' => $this->p1PlantaBajaConstruida,
            'att_p1PlantaAltaConstruida' => $this->p1PlantaAltaConstruida,
            'att_p1SegundoNivelConstruida' => $this->p1SegundoNivelConstruida,
            'att_p1OtrosConstruida' => $this->p1OtrosConstruida,
            'att_p1TotalConstruida' => $this->p1TotalConstruida,
            'att_p1PlantaAltaXConstruir' => $this->p1PlantaAltaXConstruir,
            'att_p1PlantaBajaXConstruir' => $this->p1PlantaBajaXConstruir,
            'att_p1SegundoNivelXConstruir' => $this->p1SegundoNivelXConstruir,
            'att_p1OtrosXConstruir' => $this->p1OtrosXConstruir,
            'att_p1TotalXConstruir' => $this->p1TotalXConstruir,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NombreSolicitante.valor', $this->p1NombreSolicitante])
            ->andFilterWhere(['like', 'att_p1DireccionSolicitante.valor', $this->p1DireccionSolicitante])
            ->andFilterWhere(['like', 'att_p1TelefonoSolicitante.valor', $this->p1TelefonoSolicitante])
            ->andFilterWhere(['like', 'att_p1CorreoSolicitante.valor', $this->p1CorreoSolicitante])
            ->andFilterWhere(['like', 'att_p1UsoActual.valor', $this->p1UsoActual])
            ->andFilterWhere(['like', 'att_p1UsoSolicitado.valor', $this->p1UsoSolicitado])
            ->andFilterWhere(['like', 'att_p1DescriProceso.valor', $this->p1DescriProceso])
            ->andFilterWhere(['like', 'att_p1NoCajones.valor', $this->p1NoCajones])
            ->andFilterWhere(['like', 'att_p1CallePredio.valor', $this->p1CallePredio])
            ->andFilterWhere(['like', 'att_p1ColoniaPredio.valor', $this->p1ColoniaPredio])
            ->andFilterWhere(['like', 'att_p1NumeroOficial.valor', $this->p1NumeroOficial])
            ->andFilterWhere(['like', 'att_p1NumeroInterio.valor', $this->p1NumeroInterio])
            ->andFilterWhere(['like', 'att_p1PobladoPredio.valor', $this->p1PobladoPredio])
            ->andFilterWhere(['like', 'att_p1SindicaturaPredio.valor', $this->p1SindicaturaPredio])
            ->andFilterWhere(['like', 'att_p1ClaveCatastralPredio.valor', $this->p1ClaveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1NombrePropietarios.valor', $this->p1NombrePropietarios])
            ->andFilterWhere(['like', 'att_p1DireccionPropietarios.valor', $this->p1DireccionPropietarios])
            ->andFilterWhere(['like', 'att_p1TelefonoPropietarios.valor', $this->p1TelefonoPropietarios])
            ->andFilterWhere(['like', 'att_p1CorreoPropietarios.valor', $this->p1CorreoPropietarios])
            ->andFilterWhere(['like', 'att_p1FirmaSolicitante.valor', $this->p1FirmaSolicitante])
            ->andFilterWhere(['like', 'att_p1FirmaPropietarios.valor', $this->p1FirmaPropietarios])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p1Sellos.valor', $this->p1Sellos])
            ->andFilterWhere(['like', 'att_p1NombreGestor.valor', $this->p1NombreGestor])
            ->andFilterWhere(['like', 'att_p1DireccionGestor.valor', $this->p1DireccionGestor])
            ->andFilterWhere(['like', 'att_p1TelefonoGestor.valor', $this->p1TelefonoGestor])
            ->andFilterWhere(['like', 'att_p1CorreoGestor.valor', $this->p1CorreoGestor])
            ->andFilterWhere(['like', 'att_p1FirmaGestor.valor', $this->p1FirmaGestor])
            ->andFilterWhere(['like', 'att_p2Escrituras.valor', $this->p2Escrituras])
            ->andFilterWhere(['like', 'att_p2ReciboDerechos.valor', $this->p2ReciboDerechos])
            ->andFilterWhere(['like', 'att_p2CroquisUbicacion.valor', $this->p2CroquisUbicacion])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p2Alineamiento.valor', $this->p2Alineamiento])
            ->andFilterWhere(['like', 'att_p2PropuestaRelotificacion.valor', $this->p2PropuestaRelotificacion])
            ->andFilterWhere(['like', 'att_p3Escrituras.valor', $this->p3Escrituras])
            ->andFilterWhere(['like', 'att_p3ReciboDerechos.valor', $this->p3ReciboDerechos])
            ->andFilterWhere(['like', 'att_p3CroquisUbicacion.valor', $this->p3CroquisUbicacion])
            ->andFilterWhere(['like', 'att_p3Pago.valor', $this->p3Pago])
            ->andFilterWhere(['like', 'att_p3Alineamiento.valor', $this->p3Alineamiento])
            ->andFilterWhere(['like', 'att_p3PropuestaRelotificacion.valor', $this->p3PropuestaRelotificacion])
            ->andFilterWhere(['like', 'att_p4Imprimir.valor', $this->p4Imprimir]);

        return $dataProvider;
    }
}
