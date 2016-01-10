<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramiteUsoDeSuelo;

/**
 * TramiteUsoDeSueloSearch represents the model behind the search form about `app\models\TramiteUsoDeSuelo`.
 */
class TramiteUsoDeSueloSearch extends TramiteUsoDeSuelo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1Observaciones', 'p1Sellos', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor', 'p2Escrituras', 'p2ReciboDerechos', 'p2Alineamiento', 'p2ProyectoArquitectonico', 'p2ImpactoAmbiental', 'p2ImpactoVial', 'p2OpinionBomberos', 'p2ProteccionCivil', 'p2Inah', 'p2Sepyc', 'p2Masa', 'p2Aeronautica', 'p2Vecinos', 'p3Escrituras', 'p3ReciboDerechos', 'p3Alineamiento', 'p3ProyectoArquitectonico', 'p3ImpactoAmbiental', 'p3ImpactoVial', 'p3OpinionBomberos', 'p3ProteccionCivil', 'p3Inah', 'p3Sepyc', 'p3Masa', 'p3Aeronautica', 'p3Vecinos', 'p4Imprimir'], 'safe'],
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
        $query = TramiteUsoDeSuelo::find();

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
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1129');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1130');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1131');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1132');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1133');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1134');
        $query -> leftJoin('valoresTramite att_p1DescriProceso', 
                            'att_p1DescriProceso.tramiteId=Tramites.id and att_p1DescriProceso.atributoId=1135');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1136');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1137');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1138');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1139');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1140');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1141');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1142');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1143');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1144');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1145');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1146');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1147');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1148');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1149');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1150');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1151');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1152');
        $query -> leftJoin('valoresTramite att_p1FirmaSolicitante', 
                            'att_p1FirmaSolicitante.tramiteId=Tramites.id and att_p1FirmaSolicitante.atributoId=1153');
        $query -> leftJoin('valoresTramite att_p1FirmaPropietarios', 
                            'att_p1FirmaPropietarios.tramiteId=Tramites.id and att_p1FirmaPropietarios.atributoId=1154');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1155');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1156');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1157');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1158');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1159');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1160');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1161');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1162');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1163');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1164');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1165');
        $query -> leftJoin('valoresTramite att_p1Sellos', 
                            'att_p1Sellos.tramiteId=Tramites.id and att_p1Sellos.atributoId=1166');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1167');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1168');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1169');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1170');
        $query -> leftJoin('valoresTramite att_p1FirmaGestor', 
                            'att_p1FirmaGestor.tramiteId=Tramites.id and att_p1FirmaGestor.atributoId=1171');
        $query -> leftJoin('valoresTramite att_p2Escrituras', 
                            'att_p2Escrituras.tramiteId=Tramites.id and att_p2Escrituras.atributoId=1172');
        $query -> leftJoin('valoresTramite att_p2ReciboDerechos', 
                            'att_p2ReciboDerechos.tramiteId=Tramites.id and att_p2ReciboDerechos.atributoId=1173');
        $query -> leftJoin('valoresTramite att_p2Alineamiento', 
                            'att_p2Alineamiento.tramiteId=Tramites.id and att_p2Alineamiento.atributoId=1174');
        $query -> leftJoin('valoresTramite att_p2ProyectoArquitectonico', 
                            'att_p2ProyectoArquitectonico.tramiteId=Tramites.id and att_p2ProyectoArquitectonico.atributoId=1175');
        $query -> leftJoin('valoresTramite att_p2ImpactoAmbiental', 
                            'att_p2ImpactoAmbiental.tramiteId=Tramites.id and att_p2ImpactoAmbiental.atributoId=1176');
        $query -> leftJoin('valoresTramite att_p2ImpactoVial', 
                            'att_p2ImpactoVial.tramiteId=Tramites.id and att_p2ImpactoVial.atributoId=1177');
        $query -> leftJoin('valoresTramite att_p2OpinionBomberos', 
                            'att_p2OpinionBomberos.tramiteId=Tramites.id and att_p2OpinionBomberos.atributoId=1178');
        $query -> leftJoin('valoresTramite att_p2ProteccionCivil', 
                            'att_p2ProteccionCivil.tramiteId=Tramites.id and att_p2ProteccionCivil.atributoId=1179');
        $query -> leftJoin('valoresTramite att_p2Inah', 
                            'att_p2Inah.tramiteId=Tramites.id and att_p2Inah.atributoId=1180');
        $query -> leftJoin('valoresTramite att_p2Sepyc', 
                            'att_p2Sepyc.tramiteId=Tramites.id and att_p2Sepyc.atributoId=1181');
        $query -> leftJoin('valoresTramite att_p2Masa', 
                            'att_p2Masa.tramiteId=Tramites.id and att_p2Masa.atributoId=1182');
        $query -> leftJoin('valoresTramite att_p2Aeronautica', 
                            'att_p2Aeronautica.tramiteId=Tramites.id and att_p2Aeronautica.atributoId=1183');
        $query -> leftJoin('valoresTramite att_p2Vecinos', 
                            'att_p2Vecinos.tramiteId=Tramites.id and att_p2Vecinos.atributoId=1184');
        $query -> leftJoin('valoresTramite att_p3Escrituras', 
                            'att_p3Escrituras.tramiteId=Tramites.id and att_p3Escrituras.atributoId=1185');
        $query -> leftJoin('valoresTramite att_p3ReciboDerechos', 
                            'att_p3ReciboDerechos.tramiteId=Tramites.id and att_p3ReciboDerechos.atributoId=1186');
        $query -> leftJoin('valoresTramite att_p3Alineamiento', 
                            'att_p3Alineamiento.tramiteId=Tramites.id and att_p3Alineamiento.atributoId=1187');
        $query -> leftJoin('valoresTramite att_p3ProyectoArquitectonico', 
                            'att_p3ProyectoArquitectonico.tramiteId=Tramites.id and att_p3ProyectoArquitectonico.atributoId=1188');
        $query -> leftJoin('valoresTramite att_p3ImpactoAmbiental', 
                            'att_p3ImpactoAmbiental.tramiteId=Tramites.id and att_p3ImpactoAmbiental.atributoId=1189');
        $query -> leftJoin('valoresTramite att_p3ImpactoVial', 
                            'att_p3ImpactoVial.tramiteId=Tramites.id and att_p3ImpactoVial.atributoId=1190');
        $query -> leftJoin('valoresTramite att_p3OpinionBomberos', 
                            'att_p3OpinionBomberos.tramiteId=Tramites.id and att_p3OpinionBomberos.atributoId=1191');
        $query -> leftJoin('valoresTramite att_p3ProteccionCivil', 
                            'att_p3ProteccionCivil.tramiteId=Tramites.id and att_p3ProteccionCivil.atributoId=1192');
        $query -> leftJoin('valoresTramite att_p3Inah', 
                            'att_p3Inah.tramiteId=Tramites.id and att_p3Inah.atributoId=1193');
        $query -> leftJoin('valoresTramite att_p3Sepyc', 
                            'att_p3Sepyc.tramiteId=Tramites.id and att_p3Sepyc.atributoId=1194');
        $query -> leftJoin('valoresTramite att_p3Masa', 
                            'att_p3Masa.tramiteId=Tramites.id and att_p3Masa.atributoId=1195');
        $query -> leftJoin('valoresTramite att_p3Aeronautica', 
                            'att_p3Aeronautica.tramiteId=Tramites.id and att_p3Aeronautica.atributoId=1196');
        $query -> leftJoin('valoresTramite att_p3Vecinos', 
                            'att_p3Vecinos.tramiteId=Tramites.id and att_p3Vecinos.atributoId=1197');
        $query -> leftJoin('valoresTramite att_p4Imprimir', 
                            'att_p4Imprimir.tramiteId=Tramites.id and att_p4Imprimir.atributoId=1198');
        
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
            ->andFilterWhere(['like', 'att_p2Alineamiento.valor', $this->p2Alineamiento])
            ->andFilterWhere(['like', 'att_p2ProyectoArquitectonico.valor', $this->p2ProyectoArquitectonico])
            ->andFilterWhere(['like', 'att_p2ImpactoAmbiental.valor', $this->p2ImpactoAmbiental])
            ->andFilterWhere(['like', 'att_p2ImpactoVial.valor', $this->p2ImpactoVial])
            ->andFilterWhere(['like', 'att_p2OpinionBomberos.valor', $this->p2OpinionBomberos])
            ->andFilterWhere(['like', 'att_p2ProteccionCivil.valor', $this->p2ProteccionCivil])
            ->andFilterWhere(['like', 'att_p2Inah.valor', $this->p2Inah])
            ->andFilterWhere(['like', 'att_p2Sepyc.valor', $this->p2Sepyc])
            ->andFilterWhere(['like', 'att_p2Masa.valor', $this->p2Masa])
            ->andFilterWhere(['like', 'att_p2Aeronautica.valor', $this->p2Aeronautica])
            ->andFilterWhere(['like', 'att_p2Vecinos.valor', $this->p2Vecinos])
            ->andFilterWhere(['like', 'att_p3Escrituras.valor', $this->p3Escrituras])
            ->andFilterWhere(['like', 'att_p3ReciboDerechos.valor', $this->p3ReciboDerechos])
            ->andFilterWhere(['like', 'att_p3Alineamiento.valor', $this->p3Alineamiento])
            ->andFilterWhere(['like', 'att_p3ProyectoArquitectonico.valor', $this->p3ProyectoArquitectonico])
            ->andFilterWhere(['like', 'att_p3ImpactoAmbiental.valor', $this->p3ImpactoAmbiental])
            ->andFilterWhere(['like', 'att_p3ImpactoVial.valor', $this->p3ImpactoVial])
            ->andFilterWhere(['like', 'att_p3OpinionBomberos.valor', $this->p3OpinionBomberos])
            ->andFilterWhere(['like', 'att_p3ProteccionCivil.valor', $this->p3ProteccionCivil])
            ->andFilterWhere(['like', 'att_p3Inah.valor', $this->p3Inah])
            ->andFilterWhere(['like', 'att_p3Sepyc.valor', $this->p3Sepyc])
            ->andFilterWhere(['like', 'att_p3Masa.valor', $this->p3Masa])
            ->andFilterWhere(['like', 'att_p3Aeronautica.valor', $this->p3Aeronautica])
            ->andFilterWhere(['like', 'att_p3Vecinos.valor', $this->p3Vecinos])
            ->andFilterWhere(['like', 'att_p4Imprimir.valor', $this->p4Imprimir]);

        return $dataProvider;
    }
}
