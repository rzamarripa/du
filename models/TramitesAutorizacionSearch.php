<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesAutorizacion;

/**
 * TramitesAutorizacionSearch represents the model behind the search form about `app\models\TramitesAutorizacion`.
 */
class TramitesAutorizacionSearch extends TramitesAutorizacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Constancia', 'p3Supervisor', 'p3Observaciones', 'p4Constancia', 'p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5PlanoLotificacionVialidad', 'p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad', 'p7Aprobacion', 'p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad', 'p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad', 'p10Autorizacion'], 'safe'],
            [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'number'],
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
        $query = TramitesAutorizacion::find();

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
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1421');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1422');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1423');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1424');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1425');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1426');
        $query -> leftJoin('valoresTramite att_p1DescripcionProceso', 
                            'att_p1DescripcionProceso.tramiteId=Tramites.id and att_p1DescripcionProceso.atributoId=1427');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1428');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1429');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1430');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1431');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1432');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1433');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1434');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1435');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1436');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1437');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1438');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1439');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1440');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1441');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1442');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1443');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1444');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1445');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1446');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1447');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1448');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1449');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1450');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1451');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1452');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1453');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1454');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1455');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1456');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1457');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1458');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1459');
        $query -> leftJoin('valoresTramite att_p2Constancia', 
                            'att_p2Constancia.tramiteId=Tramites.id and att_p2Constancia.atributoId=1460');
        $query -> leftJoin('valoresTramite att_p3Supervisor', 
                            'att_p3Supervisor.tramiteId=Tramites.id and att_p3Supervisor.atributoId=1461');
        $query -> leftJoin('valoresTramite att_p3Observaciones', 
                            'att_p3Observaciones.tramiteId=Tramites.id and att_p3Observaciones.atributoId=1462');
        $query -> leftJoin('valoresTramite att_p4Constancia', 
                            'att_p4Constancia.tramiteId=Tramites.id and att_p4Constancia.atributoId=1463');
        $query -> leftJoin('valoresTramite att_p5TituloPropiedad', 
                            'att_p5TituloPropiedad.tramiteId=Tramites.id and att_p5TituloPropiedad.atributoId=1464');
        $query -> leftJoin('valoresTramite att_p5PlanoLocalizacion', 
                            'att_p5PlanoLocalizacion.tramiteId=Tramites.id and att_p5PlanoLocalizacion.atributoId=1465');
        $query -> leftJoin('valoresTramite att_p5PlanoTopogra', 
                            'att_p5PlanoTopogra.tramiteId=Tramites.id and att_p5PlanoTopogra.atributoId=1466');
        $query -> leftJoin('valoresTramite att_p5PlanoLotificacionVialidad', 
                            'att_p5PlanoLotificacionVialidad.tramiteId=Tramites.id and att_p5PlanoLotificacionVialidad.atributoId=1467');
        $query -> leftJoin('valoresTramite att_p6TituloPropiedad', 
                            'att_p6TituloPropiedad.tramiteId=Tramites.id and att_p6TituloPropiedad.atributoId=1468');
        $query -> leftJoin('valoresTramite att_p6PlanoLocalizacion', 
                            'att_p6PlanoLocalizacion.tramiteId=Tramites.id and att_p6PlanoLocalizacion.atributoId=1469');
        $query -> leftJoin('valoresTramite att_p6PlanoTopogra', 
                            'att_p6PlanoTopogra.tramiteId=Tramites.id and att_p6PlanoTopogra.atributoId=1470');
        $query -> leftJoin('valoresTramite att_p6PlanoLotificacionVialidad', 
                            'att_p6PlanoLotificacionVialidad.tramiteId=Tramites.id and att_p6PlanoLotificacionVialidad.atributoId=1471');
        $query -> leftJoin('valoresTramite att_p7Aprobacion', 
                            'att_p7Aprobacion.tramiteId=Tramites.id and att_p7Aprobacion.atributoId=1472');
        $query -> leftJoin('valoresTramite att_p8Solicitud', 
                            'att_p8Solicitud.tramiteId=Tramites.id and att_p8Solicitud.atributoId=1473');
        $query -> leftJoin('valoresTramite att_p8AcrediteCaracter', 
                            'att_p8AcrediteCaracter.tramiteId=Tramites.id and att_p8AcrediteCaracter.atributoId=1474');
        $query -> leftJoin('valoresTramite att_p8ActaConstitutiva', 
                            'att_p8ActaConstitutiva.tramiteId=Tramites.id and att_p8ActaConstitutiva.atributoId=1475');
        $query -> leftJoin('valoresTramite att_p8LibertadGravamen', 
                            'att_p8LibertadGravamen.tramiteId=Tramites.id and att_p8LibertadGravamen.atributoId=1476');
        $query -> leftJoin('valoresTramite att_p8Minuta', 
                            'att_p8Minuta.tramiteId=Tramites.id and att_p8Minuta.atributoId=1477');
        $query -> leftJoin('valoresTramite att_p8PlanoNomenclatura', 
                            'att_p8PlanoNomenclatura.tramiteId=Tramites.id and att_p8PlanoNomenclatura.atributoId=1478');
        $query -> leftJoin('valoresTramite att_p8FactibilidadJapac', 
                            'att_p8FactibilidadJapac.tramiteId=Tramites.id and att_p8FactibilidadJapac.atributoId=1479');
        $query -> leftJoin('valoresTramite att_p8FactibilidadCFE', 
                            'att_p8FactibilidadCFE.tramiteId=Tramites.id and att_p8FactibilidadCFE.atributoId=1480');
        $query -> leftJoin('valoresTramite att_p8EstudiosHidrologico', 
                            'att_p8EstudiosHidrologico.tramiteId=Tramites.id and att_p8EstudiosHidrologico.atributoId=1481');
        $query -> leftJoin('valoresTramite att_p8Alumbrado', 
                            'att_p8Alumbrado.tramiteId=Tramites.id and att_p8Alumbrado.atributoId=1482');
        $query -> leftJoin('valoresTramite att_p8ProteccionCivil', 
                            'att_p8ProteccionCivil.tramiteId=Tramites.id and att_p8ProteccionCivil.atributoId=1483');
        $query -> leftJoin('valoresTramite att_p8Vialidad', 
                            'att_p8Vialidad.tramiteId=Tramites.id and att_p8Vialidad.atributoId=1484');
        $query -> leftJoin('valoresTramite att_p9Solicitud', 
                            'att_p9Solicitud.tramiteId=Tramites.id and att_p9Solicitud.atributoId=1485');
        $query -> leftJoin('valoresTramite att_p9AcrediteCaracter', 
                            'att_p9AcrediteCaracter.tramiteId=Tramites.id and att_p9AcrediteCaracter.atributoId=1486');
        $query -> leftJoin('valoresTramite att_p9ActaConstitutiva', 
                            'att_p9ActaConstitutiva.tramiteId=Tramites.id and att_p9ActaConstitutiva.atributoId=1487');
        $query -> leftJoin('valoresTramite att_p9LibertadGravamen', 
                            'att_p9LibertadGravamen.tramiteId=Tramites.id and att_p9LibertadGravamen.atributoId=1488');
        $query -> leftJoin('valoresTramite att_p9Minuta', 
                            'att_p9Minuta.tramiteId=Tramites.id and att_p9Minuta.atributoId=1489');
        $query -> leftJoin('valoresTramite att_p9PlanoNomenclatura', 
                            'att_p9PlanoNomenclatura.tramiteId=Tramites.id and att_p9PlanoNomenclatura.atributoId=1490');
        $query -> leftJoin('valoresTramite att_p9FactibilidadJapac', 
                            'att_p9FactibilidadJapac.tramiteId=Tramites.id and att_p9FactibilidadJapac.atributoId=1491');
        $query -> leftJoin('valoresTramite att_p9FactibilidadCFE', 
                            'att_p9FactibilidadCFE.tramiteId=Tramites.id and att_p9FactibilidadCFE.atributoId=1492');
        $query -> leftJoin('valoresTramite att_p9EstudiosHidrologico', 
                            'att_p9EstudiosHidrologico.tramiteId=Tramites.id and att_p9EstudiosHidrologico.atributoId=1493');
        $query -> leftJoin('valoresTramite att_p9Alumbrado', 
                            'att_p9Alumbrado.tramiteId=Tramites.id and att_p9Alumbrado.atributoId=1494');
        $query -> leftJoin('valoresTramite att_p9ProteccionCivil', 
                            'att_p9ProteccionCivil.tramiteId=Tramites.id and att_p9ProteccionCivil.atributoId=1495');
        $query -> leftJoin('valoresTramite att_p9Vialidad', 
                            'att_p9Vialidad.tramiteId=Tramites.id and att_p9Vialidad.atributoId=1496');
        $query -> leftJoin('valoresTramite att_p10Autorizacion', 
                            'att_p10Autorizacion.tramiteId=Tramites.id and att_p10Autorizacion.atributoId=1497');
        
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
            'att_p1PlantaBajaXConstruir' => $this->p1PlantaBajaXConstruir,
            'att_p1PlantaAltaXConstruir' => $this->p1PlantaAltaXConstruir,
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
            ->andFilterWhere(['like', 'att_p1DescripcionProceso.valor', $this->p1DescripcionProceso])
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
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p1NombreGestor.valor', $this->p1NombreGestor])
            ->andFilterWhere(['like', 'att_p1DireccionGestor.valor', $this->p1DireccionGestor])
            ->andFilterWhere(['like', 'att_p1TelefonoGestor.valor', $this->p1TelefonoGestor])
            ->andFilterWhere(['like', 'att_p1CorreoGestor.valor', $this->p1CorreoGestor])
            ->andFilterWhere(['like', 'att_p2Constancia.valor', $this->p2Constancia])
            ->andFilterWhere(['like', 'att_p3Supervisor.valor', $this->p3Supervisor])
            ->andFilterWhere(['like', 'att_p3Observaciones.valor', $this->p3Observaciones])
            ->andFilterWhere(['like', 'att_p4Constancia.valor', $this->p4Constancia])
            ->andFilterWhere(['like', 'att_p5TituloPropiedad.valor', $this->p5TituloPropiedad])
            ->andFilterWhere(['like', 'att_p5PlanoLocalizacion.valor', $this->p5PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p5PlanoTopogra.valor', $this->p5PlanoTopogra])
            ->andFilterWhere(['like', 'att_p5PlanoLotificacionVialidad.valor', $this->p5PlanoLotificacionVialidad])
            ->andFilterWhere(['like', 'att_p6TituloPropiedad.valor', $this->p6TituloPropiedad])
            ->andFilterWhere(['like', 'att_p6PlanoLocalizacion.valor', $this->p6PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p6PlanoTopogra.valor', $this->p6PlanoTopogra])
            ->andFilterWhere(['like', 'att_p6PlanoLotificacionVialidad.valor', $this->p6PlanoLotificacionVialidad])
            ->andFilterWhere(['like', 'att_p7Aprobacion.valor', $this->p7Aprobacion])
            ->andFilterWhere(['like', 'att_p8Solicitud.valor', $this->p8Solicitud])
            ->andFilterWhere(['like', 'att_p8AcrediteCaracter.valor', $this->p8AcrediteCaracter])
            ->andFilterWhere(['like', 'att_p8ActaConstitutiva.valor', $this->p8ActaConstitutiva])
            ->andFilterWhere(['like', 'att_p8LibertadGravamen.valor', $this->p8LibertadGravamen])
            ->andFilterWhere(['like', 'att_p8Minuta.valor', $this->p8Minuta])
            ->andFilterWhere(['like', 'att_p8PlanoNomenclatura.valor', $this->p8PlanoNomenclatura])
            ->andFilterWhere(['like', 'att_p8FactibilidadJapac.valor', $this->p8FactibilidadJapac])
            ->andFilterWhere(['like', 'att_p8FactibilidadCFE.valor', $this->p8FactibilidadCFE])
            ->andFilterWhere(['like', 'att_p8EstudiosHidrologico.valor', $this->p8EstudiosHidrologico])
            ->andFilterWhere(['like', 'att_p8Alumbrado.valor', $this->p8Alumbrado])
            ->andFilterWhere(['like', 'att_p8ProteccionCivil.valor', $this->p8ProteccionCivil])
            ->andFilterWhere(['like', 'att_p8Vialidad.valor', $this->p8Vialidad])
            ->andFilterWhere(['like', 'att_p9Solicitud.valor', $this->p9Solicitud])
            ->andFilterWhere(['like', 'att_p9AcrediteCaracter.valor', $this->p9AcrediteCaracter])
            ->andFilterWhere(['like', 'att_p9ActaConstitutiva.valor', $this->p9ActaConstitutiva])
            ->andFilterWhere(['like', 'att_p9LibertadGravamen.valor', $this->p9LibertadGravamen])
            ->andFilterWhere(['like', 'att_p9Minuta.valor', $this->p9Minuta])
            ->andFilterWhere(['like', 'att_p9PlanoNomenclatura.valor', $this->p9PlanoNomenclatura])
            ->andFilterWhere(['like', 'att_p9FactibilidadJapac.valor', $this->p9FactibilidadJapac])
            ->andFilterWhere(['like', 'att_p9FactibilidadCFE.valor', $this->p9FactibilidadCFE])
            ->andFilterWhere(['like', 'att_p9EstudiosHidrologico.valor', $this->p9EstudiosHidrologico])
            ->andFilterWhere(['like', 'att_p9Alumbrado.valor', $this->p9Alumbrado])
            ->andFilterWhere(['like', 'att_p9ProteccionCivil.valor', $this->p9ProteccionCivil])
            ->andFilterWhere(['like', 'att_p9Vialidad.valor', $this->p9Vialidad])
            ->andFilterWhere(['like', 'att_p10Autorizacion.valor', $this->p10Autorizacion]);

        return $dataProvider;
    }
}
