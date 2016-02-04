<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesLicenciaConstruccion;

/**
 * TramitesLicenciaConstruccionSearch represents the model behind the search form about `app\models\TramitesLicenciaConstruccion`.
 */
class TramitesLicenciaConstruccionSearch extends TramitesLicenciaConstruccion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId', 'folio', 'ciclo'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1NombreDRO', 'p1NumeroDRO', 'p1TelefonoDRO', 'p1CallePredio', 'p1ColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p2CopiaEscritura', 'p2PlanoManzanero', 'p2CasaHabitacionAlineamientoNumeroOficial', 'p2CasaHabitacionCroquis', 'p2CasaHabitacionPredial', 'p2CasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionAlineamiento', 'p2ConstruccionCasaHabitacionPlano', 'p2ConstruccionCasaHabitacionPredial', 'p2ConstruccionCasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionBitacora', 'p2Solicitud', 'p2ConstruccionCasaHabitacionSolicitud', 'p2ConstruccionCasaHabitacionProyecto', 'p2ConstruccionLocalAlineamiento', 'p2ConstruccionLocalPlano', 'p2ConstruccionLocalLicencia', 'p2ConstruccionLocalPredial', 'p2ConstruccionLocalEscrituras', 'p2ConstruccionLocalSolicitud', 'p2ConstruccionLocalBitacora', 'p2ConstruccionLocalProyecto', 'p2BardasAlineamiento', 'p2BardasMarcarBarda', 'p2BardasPredial', 'p2BardasEscrituras', 'p2BardasAltura', 'p2RemodelacionAlineamiento', 'p2RemodelacionCroquis', 'p2RemodelacionPresupuesto', 'p2RemodelacionPredial', 'p2RemodelacionEscrituras', 'p2RemodelacionLicencia', 'p2BanquetasPredial', 'p2BanquetasCroquis', 'p2ProrrogaPermiso', 'p2ProrrogaRecibo', 'p2ProrrogaPlano', 'p2ProrrogaSolicitud', 'p2PermisoSolicitud', 'p2DemolicionEscrituras', 'p2DemolicionPredial', 'p2DemolicionPlano', 'p3Resolutivo', 'p4Escrituras', 'p4Solicitud', 'p4PlanoManzanero', 'p4CasaHabitacionAlineamientoNumeroOficial', 'p4CasaHabitacionCroquis', 'p4CasaHabitacionPredial', 'p4CasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionAlineamiento', 'p4ConstruccionCasaHabitacionPlano', 'p4ConstruccionCasaHabitacionPredial', 'p4ConstruccionCasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionBitacora', 'p4ConstruccionCasaHabitacionSolicitud', 'p4ConstruccionCasaHabitacionProyecto', 'p4ConstruccionLocalAlineamiento', 'p4ConstruccionLocalPlano', 'p4ConstruccionLocalLicencia', 'p4ConstruccionLocalPredial', 'p4ConstruccionLocalEscrituras', 'p4ConstruccionLocalSolicitud', 'p4ConstruccionLocalBitacora', 'p4ConstruccionLocalProyecto', 'p4BardasAlineamiento', 'p4BardasMarcarBarda', 'p4BardasPredial', 'p4BardasEscrituras', 'p4BardasAltura', 'p4RemodelacionAlineamiento', 'p4RemodelacionCroquis', 'p4RemodelacionPresupuesto', 'p4RemodelacionPredial', 'p4RemodelacionEscrituras', 'p4RemodelacionLicencia', 'p4BanquetasPredial', 'p4BanquetasCroquis', 'p4ProrrogaPermiso', 'p4ProrrogaRecibo', 'p4ProrrogaPlano', 'p4ProrrogaSolicitud', 'p4PermisoSolicitud', 'p4DemolicionEscrituras', 'p4DemolicionPredial', 'p4DemolicionPlano', 'p5Licencia', 'p6EnvioExpediente', 'p6Observaciones', 'p1Concepto', 'p1Tipo'], 'safe'],
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
        $query = TramitesLicenciaConstruccion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=3737');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=3738');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=3739');
        $query -> leftJoin('valoresTramite att_p1NombreDRO', 
                            'att_p1NombreDRO.tramiteId=Tramites.id and att_p1NombreDRO.atributoId=3740');
        $query -> leftJoin('valoresTramite att_p1NumeroDRO', 
                            'att_p1NumeroDRO.tramiteId=Tramites.id and att_p1NumeroDRO.atributoId=3741');
        $query -> leftJoin('valoresTramite att_p1TelefonoDRO', 
                            'att_p1TelefonoDRO.tramiteId=Tramites.id and att_p1TelefonoDRO.atributoId=3742');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3743');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=3744');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3745');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3746');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3747');
        $query -> leftJoin('valoresTramite att_p1NorteLocalizacion', 
                            'att_p1NorteLocalizacion.tramiteId=Tramites.id and att_p1NorteLocalizacion.atributoId=3748');
        $query -> leftJoin('valoresTramite att_p1SurLocalizacion', 
                            'att_p1SurLocalizacion.tramiteId=Tramites.id and att_p1SurLocalizacion.atributoId=3749');
        $query -> leftJoin('valoresTramite att_p1OrienteLocalizacion', 
                            'att_p1OrienteLocalizacion.tramiteId=Tramites.id and att_p1OrienteLocalizacion.atributoId=3750');
        $query -> leftJoin('valoresTramite att_p1PonienteLocalizacion', 
                            'att_p1PonienteLocalizacion.tramiteId=Tramites.id and att_p1PonienteLocalizacion.atributoId=3751');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=3752');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=3753');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=3754');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=3755');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=3756');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=3757');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=3758');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=3759');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=3760');
        $query -> leftJoin('valoresTramite att_p2CopiaEscritura', 
                            'att_p2CopiaEscritura.tramiteId=Tramites.id and att_p2CopiaEscritura.atributoId=3761');
        $query -> leftJoin('valoresTramite att_p2PlanoManzanero', 
                            'att_p2PlanoManzanero.tramiteId=Tramites.id and att_p2PlanoManzanero.atributoId=3762');
        $query -> leftJoin('valoresTramite att_p2CasaHabitacionAlineamientoNumeroOficial', 
                            'att_p2CasaHabitacionAlineamientoNumeroOficial.tramiteId=Tramites.id and att_p2CasaHabitacionAlineamientoNumeroOficial.atributoId=3763');
        $query -> leftJoin('valoresTramite att_p2CasaHabitacionCroquis', 
                            'att_p2CasaHabitacionCroquis.tramiteId=Tramites.id and att_p2CasaHabitacionCroquis.atributoId=3764');
        $query -> leftJoin('valoresTramite att_p2CasaHabitacionPredial', 
                            'att_p2CasaHabitacionPredial.tramiteId=Tramites.id and att_p2CasaHabitacionPredial.atributoId=3765');
        $query -> leftJoin('valoresTramite att_p2CasaHabitacionEscrituras', 
                            'att_p2CasaHabitacionEscrituras.tramiteId=Tramites.id and att_p2CasaHabitacionEscrituras.atributoId=3766');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionAlineamiento', 
                            'att_p2ConstruccionCasaHabitacionAlineamiento.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionAlineamiento.atributoId=3767');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionPlano', 
                            'att_p2ConstruccionCasaHabitacionPlano.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionPlano.atributoId=3768');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionPredial', 
                            'att_p2ConstruccionCasaHabitacionPredial.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionPredial.atributoId=3769');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionEscrituras', 
                            'att_p2ConstruccionCasaHabitacionEscrituras.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionEscrituras.atributoId=3770');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionBitacora', 
                            'att_p2ConstruccionCasaHabitacionBitacora.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionBitacora.atributoId=3771');
        $query -> leftJoin('valoresTramite att_p2Solicitud', 
                            'att_p2Solicitud.tramiteId=Tramites.id and att_p2Solicitud.atributoId=3772');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionSolicitud', 
                            'att_p2ConstruccionCasaHabitacionSolicitud.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionSolicitud.atributoId=3773');
        $query -> leftJoin('valoresTramite att_p2ConstruccionCasaHabitacionProyecto', 
                            'att_p2ConstruccionCasaHabitacionProyecto.tramiteId=Tramites.id and att_p2ConstruccionCasaHabitacionProyecto.atributoId=3774');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalAlineamiento', 
                            'att_p2ConstruccionLocalAlineamiento.tramiteId=Tramites.id and att_p2ConstruccionLocalAlineamiento.atributoId=3775');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalPlano', 
                            'att_p2ConstruccionLocalPlano.tramiteId=Tramites.id and att_p2ConstruccionLocalPlano.atributoId=3776');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalLicencia', 
                            'att_p2ConstruccionLocalLicencia.tramiteId=Tramites.id and att_p2ConstruccionLocalLicencia.atributoId=3777');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalPredial', 
                            'att_p2ConstruccionLocalPredial.tramiteId=Tramites.id and att_p2ConstruccionLocalPredial.atributoId=3778');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalEscrituras', 
                            'att_p2ConstruccionLocalEscrituras.tramiteId=Tramites.id and att_p2ConstruccionLocalEscrituras.atributoId=3779');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalSolicitud', 
                            'att_p2ConstruccionLocalSolicitud.tramiteId=Tramites.id and att_p2ConstruccionLocalSolicitud.atributoId=3780');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalBitacora', 
                            'att_p2ConstruccionLocalBitacora.tramiteId=Tramites.id and att_p2ConstruccionLocalBitacora.atributoId=3781');
        $query -> leftJoin('valoresTramite att_p2ConstruccionLocalProyecto', 
                            'att_p2ConstruccionLocalProyecto.tramiteId=Tramites.id and att_p2ConstruccionLocalProyecto.atributoId=3782');
        $query -> leftJoin('valoresTramite att_p2BardasAlineamiento', 
                            'att_p2BardasAlineamiento.tramiteId=Tramites.id and att_p2BardasAlineamiento.atributoId=3783');
        $query -> leftJoin('valoresTramite att_p2BardasMarcarBarda', 
                            'att_p2BardasMarcarBarda.tramiteId=Tramites.id and att_p2BardasMarcarBarda.atributoId=3784');
        $query -> leftJoin('valoresTramite att_p2BardasPredial', 
                            'att_p2BardasPredial.tramiteId=Tramites.id and att_p2BardasPredial.atributoId=3785');
        $query -> leftJoin('valoresTramite att_p2BardasEscrituras', 
                            'att_p2BardasEscrituras.tramiteId=Tramites.id and att_p2BardasEscrituras.atributoId=3786');
        $query -> leftJoin('valoresTramite att_p2BardasAltura', 
                            'att_p2BardasAltura.tramiteId=Tramites.id and att_p2BardasAltura.atributoId=3787');
        $query -> leftJoin('valoresTramite att_p2RemodelacionAlineamiento', 
                            'att_p2RemodelacionAlineamiento.tramiteId=Tramites.id and att_p2RemodelacionAlineamiento.atributoId=3788');
        $query -> leftJoin('valoresTramite att_p2RemodelacionCroquis', 
                            'att_p2RemodelacionCroquis.tramiteId=Tramites.id and att_p2RemodelacionCroquis.atributoId=3789');
        $query -> leftJoin('valoresTramite att_p2RemodelacionPresupuesto', 
                            'att_p2RemodelacionPresupuesto.tramiteId=Tramites.id and att_p2RemodelacionPresupuesto.atributoId=3790');
        $query -> leftJoin('valoresTramite att_p2RemodelacionPredial', 
                            'att_p2RemodelacionPredial.tramiteId=Tramites.id and att_p2RemodelacionPredial.atributoId=3791');
        $query -> leftJoin('valoresTramite att_p2RemodelacionEscrituras', 
                            'att_p2RemodelacionEscrituras.tramiteId=Tramites.id and att_p2RemodelacionEscrituras.atributoId=3792');
        $query -> leftJoin('valoresTramite att_p2RemodelacionLicencia', 
                            'att_p2RemodelacionLicencia.tramiteId=Tramites.id and att_p2RemodelacionLicencia.atributoId=3793');
        $query -> leftJoin('valoresTramite att_p2BanquetasPredial', 
                            'att_p2BanquetasPredial.tramiteId=Tramites.id and att_p2BanquetasPredial.atributoId=3794');
        $query -> leftJoin('valoresTramite att_p2BanquetasCroquis', 
                            'att_p2BanquetasCroquis.tramiteId=Tramites.id and att_p2BanquetasCroquis.atributoId=3795');
        $query -> leftJoin('valoresTramite att_p2ProrrogaPermiso', 
                            'att_p2ProrrogaPermiso.tramiteId=Tramites.id and att_p2ProrrogaPermiso.atributoId=3796');
        $query -> leftJoin('valoresTramite att_p2ProrrogaRecibo', 
                            'att_p2ProrrogaRecibo.tramiteId=Tramites.id and att_p2ProrrogaRecibo.atributoId=3797');
        $query -> leftJoin('valoresTramite att_p2ProrrogaPlano', 
                            'att_p2ProrrogaPlano.tramiteId=Tramites.id and att_p2ProrrogaPlano.atributoId=3798');
        $query -> leftJoin('valoresTramite att_p2ProrrogaSolicitud', 
                            'att_p2ProrrogaSolicitud.tramiteId=Tramites.id and att_p2ProrrogaSolicitud.atributoId=3799');
        $query -> leftJoin('valoresTramite att_p2PermisoSolicitud', 
                            'att_p2PermisoSolicitud.tramiteId=Tramites.id and att_p2PermisoSolicitud.atributoId=3800');
        $query -> leftJoin('valoresTramite att_p2DemolicionEscrituras', 
                            'att_p2DemolicionEscrituras.tramiteId=Tramites.id and att_p2DemolicionEscrituras.atributoId=3801');
        $query -> leftJoin('valoresTramite att_p2DemolicionPredial', 
                            'att_p2DemolicionPredial.tramiteId=Tramites.id and att_p2DemolicionPredial.atributoId=3802');
        $query -> leftJoin('valoresTramite att_p2DemolicionPlano', 
                            'att_p2DemolicionPlano.tramiteId=Tramites.id and att_p2DemolicionPlano.atributoId=3803');
        $query -> leftJoin('valoresTramite att_p3Resolutivo', 
                            'att_p3Resolutivo.tramiteId=Tramites.id and att_p3Resolutivo.atributoId=3804');
        $query -> leftJoin('valoresTramite att_p4Escrituras', 
                            'att_p4Escrituras.tramiteId=Tramites.id and att_p4Escrituras.atributoId=3805');
        $query -> leftJoin('valoresTramite att_p4Solicitud', 
                            'att_p4Solicitud.tramiteId=Tramites.id and att_p4Solicitud.atributoId=3806');
        $query -> leftJoin('valoresTramite att_p4PlanoManzanero', 
                            'att_p4PlanoManzanero.tramiteId=Tramites.id and att_p4PlanoManzanero.atributoId=3807');
        $query -> leftJoin('valoresTramite att_p4CasaHabitacionAlineamientoNumeroOficial', 
                            'att_p4CasaHabitacionAlineamientoNumeroOficial.tramiteId=Tramites.id and att_p4CasaHabitacionAlineamientoNumeroOficial.atributoId=3808');
        $query -> leftJoin('valoresTramite att_p4CasaHabitacionCroquis', 
                            'att_p4CasaHabitacionCroquis.tramiteId=Tramites.id and att_p4CasaHabitacionCroquis.atributoId=3809');
        $query -> leftJoin('valoresTramite att_p4CasaHabitacionPredial', 
                            'att_p4CasaHabitacionPredial.tramiteId=Tramites.id and att_p4CasaHabitacionPredial.atributoId=3810');
        $query -> leftJoin('valoresTramite att_p4CasaHabitacionEscrituras', 
                            'att_p4CasaHabitacionEscrituras.tramiteId=Tramites.id and att_p4CasaHabitacionEscrituras.atributoId=3811');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionAlineamiento', 
                            'att_p4ConstruccionCasaHabitacionAlineamiento.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionAlineamiento.atributoId=3812');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionPlano', 
                            'att_p4ConstruccionCasaHabitacionPlano.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionPlano.atributoId=3813');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionPredial', 
                            'att_p4ConstruccionCasaHabitacionPredial.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionPredial.atributoId=3814');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionEscrituras', 
                            'att_p4ConstruccionCasaHabitacionEscrituras.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionEscrituras.atributoId=3815');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionBitacora', 
                            'att_p4ConstruccionCasaHabitacionBitacora.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionBitacora.atributoId=3816');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionSolicitud', 
                            'att_p4ConstruccionCasaHabitacionSolicitud.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionSolicitud.atributoId=3817');
        $query -> leftJoin('valoresTramite att_p4ConstruccionCasaHabitacionProyecto', 
                            'att_p4ConstruccionCasaHabitacionProyecto.tramiteId=Tramites.id and att_p4ConstruccionCasaHabitacionProyecto.atributoId=3818');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalAlineamiento', 
                            'att_p4ConstruccionLocalAlineamiento.tramiteId=Tramites.id and att_p4ConstruccionLocalAlineamiento.atributoId=3819');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalPlano', 
                            'att_p4ConstruccionLocalPlano.tramiteId=Tramites.id and att_p4ConstruccionLocalPlano.atributoId=3820');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalLicencia', 
                            'att_p4ConstruccionLocalLicencia.tramiteId=Tramites.id and att_p4ConstruccionLocalLicencia.atributoId=3821');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalPredial', 
                            'att_p4ConstruccionLocalPredial.tramiteId=Tramites.id and att_p4ConstruccionLocalPredial.atributoId=3822');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalEscrituras', 
                            'att_p4ConstruccionLocalEscrituras.tramiteId=Tramites.id and att_p4ConstruccionLocalEscrituras.atributoId=3823');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalSolicitud', 
                            'att_p4ConstruccionLocalSolicitud.tramiteId=Tramites.id and att_p4ConstruccionLocalSolicitud.atributoId=3824');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalBitacora', 
                            'att_p4ConstruccionLocalBitacora.tramiteId=Tramites.id and att_p4ConstruccionLocalBitacora.atributoId=3825');
        $query -> leftJoin('valoresTramite att_p4ConstruccionLocalProyecto', 
                            'att_p4ConstruccionLocalProyecto.tramiteId=Tramites.id and att_p4ConstruccionLocalProyecto.atributoId=3826');
        $query -> leftJoin('valoresTramite att_p4BardasAlineamiento', 
                            'att_p4BardasAlineamiento.tramiteId=Tramites.id and att_p4BardasAlineamiento.atributoId=3827');
        $query -> leftJoin('valoresTramite att_p4BardasMarcarBarda', 
                            'att_p4BardasMarcarBarda.tramiteId=Tramites.id and att_p4BardasMarcarBarda.atributoId=3828');
        $query -> leftJoin('valoresTramite att_p4BardasPredial', 
                            'att_p4BardasPredial.tramiteId=Tramites.id and att_p4BardasPredial.atributoId=3829');
        $query -> leftJoin('valoresTramite att_p4BardasEscrituras', 
                            'att_p4BardasEscrituras.tramiteId=Tramites.id and att_p4BardasEscrituras.atributoId=3830');
        $query -> leftJoin('valoresTramite att_p4BardasAltura', 
                            'att_p4BardasAltura.tramiteId=Tramites.id and att_p4BardasAltura.atributoId=3831');
        $query -> leftJoin('valoresTramite att_p4RemodelacionAlineamiento', 
                            'att_p4RemodelacionAlineamiento.tramiteId=Tramites.id and att_p4RemodelacionAlineamiento.atributoId=3832');
        $query -> leftJoin('valoresTramite att_p4RemodelacionCroquis', 
                            'att_p4RemodelacionCroquis.tramiteId=Tramites.id and att_p4RemodelacionCroquis.atributoId=3833');
        $query -> leftJoin('valoresTramite att_p4RemodelacionPresupuesto', 
                            'att_p4RemodelacionPresupuesto.tramiteId=Tramites.id and att_p4RemodelacionPresupuesto.atributoId=3834');
        $query -> leftJoin('valoresTramite att_p4RemodelacionPredial', 
                            'att_p4RemodelacionPredial.tramiteId=Tramites.id and att_p4RemodelacionPredial.atributoId=3835');
        $query -> leftJoin('valoresTramite att_p4RemodelacionEscrituras', 
                            'att_p4RemodelacionEscrituras.tramiteId=Tramites.id and att_p4RemodelacionEscrituras.atributoId=3836');
        $query -> leftJoin('valoresTramite att_p4RemodelacionLicencia', 
                            'att_p4RemodelacionLicencia.tramiteId=Tramites.id and att_p4RemodelacionLicencia.atributoId=3837');
        $query -> leftJoin('valoresTramite att_p4BanquetasPredial', 
                            'att_p4BanquetasPredial.tramiteId=Tramites.id and att_p4BanquetasPredial.atributoId=3838');
        $query -> leftJoin('valoresTramite att_p4BanquetasCroquis', 
                            'att_p4BanquetasCroquis.tramiteId=Tramites.id and att_p4BanquetasCroquis.atributoId=3839');
        $query -> leftJoin('valoresTramite att_p4ProrrogaPermiso', 
                            'att_p4ProrrogaPermiso.tramiteId=Tramites.id and att_p4ProrrogaPermiso.atributoId=3840');
        $query -> leftJoin('valoresTramite att_p4ProrrogaRecibo', 
                            'att_p4ProrrogaRecibo.tramiteId=Tramites.id and att_p4ProrrogaRecibo.atributoId=3841');
        $query -> leftJoin('valoresTramite att_p4ProrrogaPlano', 
                            'att_p4ProrrogaPlano.tramiteId=Tramites.id and att_p4ProrrogaPlano.atributoId=3842');
        $query -> leftJoin('valoresTramite att_p4ProrrogaSolicitud', 
                            'att_p4ProrrogaSolicitud.tramiteId=Tramites.id and att_p4ProrrogaSolicitud.atributoId=3843');
        $query -> leftJoin('valoresTramite att_p4PermisoSolicitud', 
                            'att_p4PermisoSolicitud.tramiteId=Tramites.id and att_p4PermisoSolicitud.atributoId=3844');
        $query -> leftJoin('valoresTramite att_p4DemolicionEscrituras', 
                            'att_p4DemolicionEscrituras.tramiteId=Tramites.id and att_p4DemolicionEscrituras.atributoId=3845');
        $query -> leftJoin('valoresTramite att_p4DemolicionPredial', 
                            'att_p4DemolicionPredial.tramiteId=Tramites.id and att_p4DemolicionPredial.atributoId=3846');
        $query -> leftJoin('valoresTramite att_p4DemolicionPlano', 
                            'att_p4DemolicionPlano.tramiteId=Tramites.id and att_p4DemolicionPlano.atributoId=3847');
        $query -> leftJoin('valoresTramite att_p5Licencia', 
                            'att_p5Licencia.tramiteId=Tramites.id and att_p5Licencia.atributoId=3848');
        $query -> leftJoin('valoresTramite att_p6EnvioExpediente', 
                            'att_p6EnvioExpediente.tramiteId=Tramites.id and att_p6EnvioExpediente.atributoId=3849');
        $query -> leftJoin('valoresTramite att_p6Observaciones', 
                            'att_p6Observaciones.tramiteId=Tramites.id and att_p6Observaciones.atributoId=3850');
        $query -> leftJoin('valoresTramite att_p1Concepto', 
                            'att_p1Concepto.tramiteId=Tramites.id and att_p1Concepto.atributoId=3851');
        $query -> leftJoin('valoresTramite att_p1Tipo', 
                            'att_p1Tipo.tramiteId=Tramites.id and att_p1Tipo.atributoId=3852');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_folio' => $this->folio,
            'att_ciclo' => $this->ciclo,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NombrePropietarios.valor', $this->p1NombrePropietarios])
            ->andFilterWhere(['like', 'att_p1DireccionPropietarios.valor', $this->p1DireccionPropietarios])
            ->andFilterWhere(['like', 'att_p1TelefonoPropietarios.valor', $this->p1TelefonoPropietarios])
            ->andFilterWhere(['like', 'att_p1NombreDRO.valor', $this->p1NombreDRO])
            ->andFilterWhere(['like', 'att_p1NumeroDRO.valor', $this->p1NumeroDRO])
            ->andFilterWhere(['like', 'att_p1TelefonoDRO.valor', $this->p1TelefonoDRO])
            ->andFilterWhere(['like', 'att_p1CallePredio.valor', $this->p1CallePredio])
            ->andFilterWhere(['like', 'att_p1ColoniaPredio.valor', $this->p1ColoniaPredio])
            ->andFilterWhere(['like', 'att_p1LotePredio.valor', $this->p1LotePredio])
            ->andFilterWhere(['like', 'att_p1ManzanaPredio.valor', $this->p1ManzanaPredio])
            ->andFilterWhere(['like', 'att_p1ClaveCatastralPredio.valor', $this->p1ClaveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1NorteLocalizacion.valor', $this->p1NorteLocalizacion])
            ->andFilterWhere(['like', 'att_p1SurLocalizacion.valor', $this->p1SurLocalizacion])
            ->andFilterWhere(['like', 'att_p1OrienteLocalizacion.valor', $this->p1OrienteLocalizacion])
            ->andFilterWhere(['like', 'att_p1PonienteLocalizacion.valor', $this->p1PonienteLocalizacion])
            ->andFilterWhere(['like', 'att_p1PlantaBajaConstruida.valor', $this->p1PlantaBajaConstruida])
            ->andFilterWhere(['like', 'att_p1PlantaAltaConstruida.valor', $this->p1PlantaAltaConstruida])
            ->andFilterWhere(['like', 'att_p1OtrosConstruida.valor', $this->p1OtrosConstruida])
            ->andFilterWhere(['like', 'att_p1TotalConstruida.valor', $this->p1TotalConstruida])
            ->andFilterWhere(['like', 'att_p1PlantaBajaXConstruir.valor', $this->p1PlantaBajaXConstruir])
            ->andFilterWhere(['like', 'att_p1PlantaAltaXConstruir.valor', $this->p1PlantaAltaXConstruir])
            ->andFilterWhere(['like', 'att_p1OtrosXConstruir.valor', $this->p1OtrosXConstruir])
            ->andFilterWhere(['like', 'att_p1TotalXConstruir.valor', $this->p1TotalXConstruir])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p2CopiaEscritura.valor', $this->p2CopiaEscritura])
            ->andFilterWhere(['like', 'att_p2PlanoManzanero.valor', $this->p2PlanoManzanero])
            ->andFilterWhere(['like', 'att_p2CasaHabitacionAlineamientoNumeroOficial.valor', $this->p2CasaHabitacionAlineamientoNumeroOficial])
            ->andFilterWhere(['like', 'att_p2CasaHabitacionCroquis.valor', $this->p2CasaHabitacionCroquis])
            ->andFilterWhere(['like', 'att_p2CasaHabitacionPredial.valor', $this->p2CasaHabitacionPredial])
            ->andFilterWhere(['like', 'att_p2CasaHabitacionEscrituras.valor', $this->p2CasaHabitacionEscrituras])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionAlineamiento.valor', $this->p2ConstruccionCasaHabitacionAlineamiento])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionPlano.valor', $this->p2ConstruccionCasaHabitacionPlano])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionPredial.valor', $this->p2ConstruccionCasaHabitacionPredial])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionEscrituras.valor', $this->p2ConstruccionCasaHabitacionEscrituras])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionBitacora.valor', $this->p2ConstruccionCasaHabitacionBitacora])
            ->andFilterWhere(['like', 'att_p2Solicitud.valor', $this->p2Solicitud])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionSolicitud.valor', $this->p2ConstruccionCasaHabitacionSolicitud])
            ->andFilterWhere(['like', 'att_p2ConstruccionCasaHabitacionProyecto.valor', $this->p2ConstruccionCasaHabitacionProyecto])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalAlineamiento.valor', $this->p2ConstruccionLocalAlineamiento])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalPlano.valor', $this->p2ConstruccionLocalPlano])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalLicencia.valor', $this->p2ConstruccionLocalLicencia])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalPredial.valor', $this->p2ConstruccionLocalPredial])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalEscrituras.valor', $this->p2ConstruccionLocalEscrituras])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalSolicitud.valor', $this->p2ConstruccionLocalSolicitud])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalBitacora.valor', $this->p2ConstruccionLocalBitacora])
            ->andFilterWhere(['like', 'att_p2ConstruccionLocalProyecto.valor', $this->p2ConstruccionLocalProyecto])
            ->andFilterWhere(['like', 'att_p2BardasAlineamiento.valor', $this->p2BardasAlineamiento])
            ->andFilterWhere(['like', 'att_p2BardasMarcarBarda.valor', $this->p2BardasMarcarBarda])
            ->andFilterWhere(['like', 'att_p2BardasPredial.valor', $this->p2BardasPredial])
            ->andFilterWhere(['like', 'att_p2BardasEscrituras.valor', $this->p2BardasEscrituras])
            ->andFilterWhere(['like', 'att_p2BardasAltura.valor', $this->p2BardasAltura])
            ->andFilterWhere(['like', 'att_p2RemodelacionAlineamiento.valor', $this->p2RemodelacionAlineamiento])
            ->andFilterWhere(['like', 'att_p2RemodelacionCroquis.valor', $this->p2RemodelacionCroquis])
            ->andFilterWhere(['like', 'att_p2RemodelacionPresupuesto.valor', $this->p2RemodelacionPresupuesto])
            ->andFilterWhere(['like', 'att_p2RemodelacionPredial.valor', $this->p2RemodelacionPredial])
            ->andFilterWhere(['like', 'att_p2RemodelacionEscrituras.valor', $this->p2RemodelacionEscrituras])
            ->andFilterWhere(['like', 'att_p2RemodelacionLicencia.valor', $this->p2RemodelacionLicencia])
            ->andFilterWhere(['like', 'att_p2BanquetasPredial.valor', $this->p2BanquetasPredial])
            ->andFilterWhere(['like', 'att_p2BanquetasCroquis.valor', $this->p2BanquetasCroquis])
            ->andFilterWhere(['like', 'att_p2ProrrogaPermiso.valor', $this->p2ProrrogaPermiso])
            ->andFilterWhere(['like', 'att_p2ProrrogaRecibo.valor', $this->p2ProrrogaRecibo])
            ->andFilterWhere(['like', 'att_p2ProrrogaPlano.valor', $this->p2ProrrogaPlano])
            ->andFilterWhere(['like', 'att_p2ProrrogaSolicitud.valor', $this->p2ProrrogaSolicitud])
            ->andFilterWhere(['like', 'att_p2PermisoSolicitud.valor', $this->p2PermisoSolicitud])
            ->andFilterWhere(['like', 'att_p2DemolicionEscrituras.valor', $this->p2DemolicionEscrituras])
            ->andFilterWhere(['like', 'att_p2DemolicionPredial.valor', $this->p2DemolicionPredial])
            ->andFilterWhere(['like', 'att_p2DemolicionPlano.valor', $this->p2DemolicionPlano])
            ->andFilterWhere(['like', 'att_p3Resolutivo.valor', $this->p3Resolutivo])
            ->andFilterWhere(['like', 'att_p4Escrituras.valor', $this->p4Escrituras])
            ->andFilterWhere(['like', 'att_p4Solicitud.valor', $this->p4Solicitud])
            ->andFilterWhere(['like', 'att_p4PlanoManzanero.valor', $this->p4PlanoManzanero])
            ->andFilterWhere(['like', 'att_p4CasaHabitacionAlineamientoNumeroOficial.valor', $this->p4CasaHabitacionAlineamientoNumeroOficial])
            ->andFilterWhere(['like', 'att_p4CasaHabitacionCroquis.valor', $this->p4CasaHabitacionCroquis])
            ->andFilterWhere(['like', 'att_p4CasaHabitacionPredial.valor', $this->p4CasaHabitacionPredial])
            ->andFilterWhere(['like', 'att_p4CasaHabitacionEscrituras.valor', $this->p4CasaHabitacionEscrituras])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionAlineamiento.valor', $this->p4ConstruccionCasaHabitacionAlineamiento])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionPlano.valor', $this->p4ConstruccionCasaHabitacionPlano])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionPredial.valor', $this->p4ConstruccionCasaHabitacionPredial])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionEscrituras.valor', $this->p4ConstruccionCasaHabitacionEscrituras])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionBitacora.valor', $this->p4ConstruccionCasaHabitacionBitacora])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionSolicitud.valor', $this->p4ConstruccionCasaHabitacionSolicitud])
            ->andFilterWhere(['like', 'att_p4ConstruccionCasaHabitacionProyecto.valor', $this->p4ConstruccionCasaHabitacionProyecto])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalAlineamiento.valor', $this->p4ConstruccionLocalAlineamiento])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalPlano.valor', $this->p4ConstruccionLocalPlano])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalLicencia.valor', $this->p4ConstruccionLocalLicencia])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalPredial.valor', $this->p4ConstruccionLocalPredial])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalEscrituras.valor', $this->p4ConstruccionLocalEscrituras])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalSolicitud.valor', $this->p4ConstruccionLocalSolicitud])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalBitacora.valor', $this->p4ConstruccionLocalBitacora])
            ->andFilterWhere(['like', 'att_p4ConstruccionLocalProyecto.valor', $this->p4ConstruccionLocalProyecto])
            ->andFilterWhere(['like', 'att_p4BardasAlineamiento.valor', $this->p4BardasAlineamiento])
            ->andFilterWhere(['like', 'att_p4BardasMarcarBarda.valor', $this->p4BardasMarcarBarda])
            ->andFilterWhere(['like', 'att_p4BardasPredial.valor', $this->p4BardasPredial])
            ->andFilterWhere(['like', 'att_p4BardasEscrituras.valor', $this->p4BardasEscrituras])
            ->andFilterWhere(['like', 'att_p4BardasAltura.valor', $this->p4BardasAltura])
            ->andFilterWhere(['like', 'att_p4RemodelacionAlineamiento.valor', $this->p4RemodelacionAlineamiento])
            ->andFilterWhere(['like', 'att_p4RemodelacionCroquis.valor', $this->p4RemodelacionCroquis])
            ->andFilterWhere(['like', 'att_p4RemodelacionPresupuesto.valor', $this->p4RemodelacionPresupuesto])
            ->andFilterWhere(['like', 'att_p4RemodelacionPredial.valor', $this->p4RemodelacionPredial])
            ->andFilterWhere(['like', 'att_p4RemodelacionEscrituras.valor', $this->p4RemodelacionEscrituras])
            ->andFilterWhere(['like', 'att_p4RemodelacionLicencia.valor', $this->p4RemodelacionLicencia])
            ->andFilterWhere(['like', 'att_p4BanquetasPredial.valor', $this->p4BanquetasPredial])
            ->andFilterWhere(['like', 'att_p4BanquetasCroquis.valor', $this->p4BanquetasCroquis])
            ->andFilterWhere(['like', 'att_p4ProrrogaPermiso.valor', $this->p4ProrrogaPermiso])
            ->andFilterWhere(['like', 'att_p4ProrrogaRecibo.valor', $this->p4ProrrogaRecibo])
            ->andFilterWhere(['like', 'att_p4ProrrogaPlano.valor', $this->p4ProrrogaPlano])
            ->andFilterWhere(['like', 'att_p4ProrrogaSolicitud.valor', $this->p4ProrrogaSolicitud])
            ->andFilterWhere(['like', 'att_p4PermisoSolicitud.valor', $this->p4PermisoSolicitud])
            ->andFilterWhere(['like', 'att_p4DemolicionEscrituras.valor', $this->p4DemolicionEscrituras])
            ->andFilterWhere(['like', 'att_p4DemolicionPredial.valor', $this->p4DemolicionPredial])
            ->andFilterWhere(['like', 'att_p4DemolicionPlano.valor', $this->p4DemolicionPlano])
            ->andFilterWhere(['like', 'att_p5Licencia.valor', $this->p5Licencia])
            ->andFilterWhere(['like', 'att_p6EnvioExpediente.valor', $this->p6EnvioExpediente])
            ->andFilterWhere(['like', 'att_p6Observaciones.valor', $this->p6Observaciones])
            ->andFilterWhere(['like', 'att_p1Concepto.valor', $this->p1Concepto])
            ->andFilterWhere(['like', 'att_p1Tipo.valor', $this->p1Tipo]);

        return $dataProvider;
    }
}
