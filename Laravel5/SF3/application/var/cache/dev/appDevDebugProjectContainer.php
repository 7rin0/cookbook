<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService',
            'be_simple_i18n_routing.router' => 'getBeSimpleI18nRouting_RouterService',
            'bigfoot.dashboard' => 'getBigfoot_DashboardService',
            'bigfoot.form.datepicker.type' => 'getBigfoot_Form_Datepicker_TypeService',
            'bigfoot.form.type.bigfoot_media' => 'getBigfoot_Form_Type_BigfootMediaService',
            'bigfoot.form.type.bigfoot_media_mediatype' => 'getBigfoot_Form_Type_BigfootMediaMediatypeService',
            'bigfoot.form.type.bigfoot_tag' => 'getBigfoot_Form_Type_BigfootTagService',
            'bigfoot.form.type.collection_item' => 'getBigfoot_Form_Type_CollectionItemService',
            'bigfoot.form.type.file' => 'getBigfoot_Form_Type_FileService',
            'bigfoot.form.type.quicklink' => 'getBigfoot_Form_Type_QuicklinkService',
            'bigfoot.form.type.sortable_collection' => 'getBigfoot_Form_Type_SortableCollectionService',
            'bigfoot.theme' => 'getBigfoot_ThemeService',
            'bigfoot.translation.database_loader' => 'getBigfoot_Translation_DatabaseLoaderService',
            'bigfoot.twig.medias_extension' => 'getBigfoot_Twig_MediasExtensionService',
            'bigfoot_content.form.type.block_template_title2_desc2_media2' => 'getBigfootContent_Form_Type_BlockTemplateTitle2Desc2Media2Service',
            'bigfoot_content.form.type.block_template_title_desc' => 'getBigfootContent_Form_Type_BlockTemplateTitleDescService',
            'bigfoot_content.form.type.block_template_title_desc_media' => 'getBigfootContent_Form_Type_BlockTemplateTitleDescMediaService',
            'bigfoot_content.form.type.content' => 'getBigfootContent_Form_Type_ContentService',
            'bigfoot_content.form.type.page_block' => 'getBigfootContent_Form_Type_PageBlockService',
            'bigfoot_content.form.type.page_sidebar' => 'getBigfootContent_Form_Type_PageSidebarService',
            'bigfoot_content.form.type.page_template_title_desc' => 'getBigfootContent_Form_Type_PageTemplateTitleDescService',
            'bigfoot_content.form.type.page_template_title_desc2' => 'getBigfootContent_Form_Type_PageTemplateTitleDesc2Service',
            'bigfoot_content.form.type.page_template_title_desc2_block' => 'getBigfootContent_Form_Type_PageTemplateTitleDesc2BlockService',
            'bigfoot_content.form.type.page_template_title_desc2_media' => 'getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaService',
            'bigfoot_content.form.type.page_template_title_desc2_media_block' => 'getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaBlockService',
            'bigfoot_content.form.type.page_template_title_desc2_media_block2' => 'getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaBlock2Service',
            'bigfoot_content.form.type.page_template_title_desc_block' => 'getBigfootContent_Form_Type_PageTemplateTitleDescBlockService',
            'bigfoot_content.form.type.page_template_title_desc_block_sidebar' => 'getBigfootContent_Form_Type_PageTemplateTitleDescBlockSidebarService',
            'bigfoot_content.form.type.page_template_title_desc_media' => 'getBigfootContent_Form_Type_PageTemplateTitleDescMediaService',
            'bigfoot_content.form.type.page_template_title_desc_media_block' => 'getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlockService',
            'bigfoot_content.form.type.page_template_title_desc_media_block2' => 'getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlock2Service',
            'bigfoot_content.form.type.page_template_title_desc_media_block_sidebar' => 'getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlockSidebarService',
            'bigfoot_content.form.type.page_template_title_desc_media_sidebar' => 'getBigfootContent_Form_Type_PageTemplateTitleDescMediaSidebarService',
            'bigfoot_content.form.type.page_template_title_desc_sidebar' => 'getBigfootContent_Form_Type_PageTemplateTitleDescSidebarService',
            'bigfoot_content.form.type.sidebar_block' => 'getBigfootContent_Form_Type_SidebarBlockService',
            'bigfoot_content.form.type.sidebar_template_block' => 'getBigfootContent_Form_Type_SidebarTemplateBlockService',
            'bigfoot_content.form.type.sidebar_template_media_block' => 'getBigfootContent_Form_Type_SidebarTemplateMediaBlockService',
            'bigfoot_content.form.type.sidebar_template_title_block' => 'getBigfootContent_Form_Type_SidebarTemplateTitleBlockService',
            'bigfoot_content.form.type.sidebar_template_title_desc_block' => 'getBigfootContent_Form_Type_SidebarTemplateTitleDescBlockService',
            'bigfoot_content.form.type.sidebar_template_title_desc_media_block' => 'getBigfootContent_Form_Type_SidebarTemplateTitleDescMediaBlockService',
            'bigfoot_content.form.type.sidebar_template_title_media_block' => 'getBigfootContent_Form_Type_SidebarTemplateTitleMediaBlockService',
            'bigfoot_content.form.type.template' => 'getBigfootContent_Form_Type_TemplateService',
            'bigfoot_content.subscriber.menu' => 'getBigfootContent_Subscriber_MenuService',
            'bigfoot_content.twig.extension.content' => 'getBigfootContent_Twig_Extension_ContentService',
            'bigfoot_context.chain.loader' => 'getBigfootContext_Chain_LoaderService',
            'bigfoot_context.form.extension.context' => 'getBigfootContext_Form_Extension_ContextService',
            'bigfoot_context.form.type.context' => 'getBigfootContext_Form_Type_ContextService',
            'bigfoot_context.language_back.loader' => 'getBigfootContext_LanguageBack_LoaderService',
            'bigfoot_context.manager.context' => 'getBigfootContext_Manager_ContextService',
            'bigfoot_context.repository.context' => 'getBigfootContext_Repository_ContextService',
            'bigfoot_context.service.context' => 'getBigfootContext_Service_ContextService',
            'bigfoot_context.subscriber.doctrine' => 'getBigfootContext_Subscriber_DoctrineService',
            'bigfoot_context.subscriber.form' => 'getBigfootContext_Subscriber_FormService',
            'bigfoot_context.subscriber.menu' => 'getBigfootContext_Subscriber_MenuService',
            'bigfoot_context.twig.extension.context' => 'getBigfootContext_Twig_Extension_ContextService',
            'bigfoot_context.voter.context' => 'getBigfootContext_Voter_ContextService',
            'bigfoot_core.cmf_routing.router' => 'getBigfootCore_CmfRouting_RouterService',
            'bigfoot_core.crud.formatter.date' => 'getBigfootCore_Crud_Formatter_DateService',
            'bigfoot_core.crud.formatter.loader' => 'getBigfootCore_Crud_Formatter_LoaderService',
            'bigfoot_core.crud.formatter.trans' => 'getBigfootCore_Crud_Formatter_TransService',
            'bigfoot_core.doctrine_listener' => 'getBigfootCore_DoctrineListenerService',
            'bigfoot_core.form.type.filters' => 'getBigfootCore_Form_Type_FiltersService',
            'bigfoot_core.form.type.settings' => 'getBigfootCore_Form_Type_SettingsService',
            'bigfoot_core.generator.token' => 'getBigfootCore_Generator_TokenService',
            'bigfoot_core.kernel_listener' => 'getBigfootCore_KernelListenerService',
            'bigfoot_core.manager.csv' => 'getBigfootCore_Manager_CsvService',
            'bigfoot_core.manager.file_manager' => 'getBigfootCore_Manager_FileManagerService',
            'bigfoot_core.manager.filters' => 'getBigfootCore_Manager_FiltersService',
            'bigfoot_core.manager.menu' => 'getBigfootCore_Manager_MenuService',
            'bigfoot_core.manager.settings' => 'getBigfootCore_Manager_SettingsService',
            'bigfoot_core.manager.translatable_label' => 'getBigfootCore_Manager_TranslatableLabelService',
            'bigfoot_core.menu.main' => 'getBigfootCore_Menu_MainService',
            'bigfoot_core.menu.test' => 'getBigfootCore_Menu_TestService',
            'bigfoot_core.menu_builder' => 'getBigfootCore_MenuBuilderService',
            'bigfoot_core.router' => 'getBigfootCore_RouterService',
            'bigfoot_core.subscriber.knp' => 'getBigfootCore_Subscriber_KnpService',
            'bigfoot_core.subscriber.menu' => 'getBigfootCore_Subscriber_MenuService',
            'bigfoot_core.translatable_subscriber' => 'getBigfootCore_TranslatableSubscriberService',
            'bigfoot_core.translation.convert' => 'getBigfootCore_Translation_ConvertService',
            'bigfoot_core.translation.repository' => 'getBigfootCore_Translation_RepositoryService',
            'bigfoot_core.twig.file_extension' => 'getBigfootCore_Twig_FileExtensionService',
            'bigfoot_core.twig.formatter_extension' => 'getBigfootCore_Twig_FormatterExtensionService',
            'bigfoot_core.twig.locale_flags_extension' => 'getBigfootCore_Twig_LocaleFlagsExtensionService',
            'bigfoot_media.provider.default' => 'getBigfootMedia_Provider_DefaultService',
            'bigfoot_media.subscriber.menu' => 'getBigfootMedia_Subscriber_MenuService',
            'bigfoot_navigation.form.type.link' => 'getBigfootNavigation_Form_Type_LinkService',
            'bigfoot_navigation.form.type.menu' => 'getBigfootNavigation_Form_Type_MenuService',
            'bigfoot_navigation.form.type.menu_item' => 'getBigfootNavigation_Form_Type_MenuItemService',
            'bigfoot_navigation.form.type.menu_item_attribute' => 'getBigfootNavigation_Form_Type_MenuItemAttributeService',
            'bigfoot_navigation.form.type.route_parameter' => 'getBigfootNavigation_Form_Type_RouteParameterService',
            'bigfoot_navigation.manager.menu_item_url' => 'getBigfootNavigation_Manager_MenuItemUrlService',
            'bigfoot_navigation.subscriber.menu' => 'getBigfootNavigation_Subscriber_MenuService',
            'bigfoot_navigation.twig.extension.link' => 'getBigfootNavigation_Twig_Extension_LinkService',
            'bigfoot_navigation.twig.extension.menu' => 'getBigfootNavigation_Twig_Extension_MenuService',
            'bigfoot_user.form.type.forgot_password' => 'getBigfootUser_Form_Type_ForgotPasswordService',
            'bigfoot_user.form.type.reset_password' => 'getBigfootUser_Form_Type_ResetPasswordService',
            'bigfoot_user.form.type.role' => 'getBigfootUser_Form_Type_RoleService',
            'bigfoot_user.form.type.user' => 'getBigfootUser_Form_Type_UserService',
            'bigfoot_user.listener.kernel' => 'getBigfootUser_Listener_KernelService',
            'bigfoot_user.mailer.user' => 'getBigfootUser_Mailer_UserService',
            'bigfoot_user.manager.role_menu' => 'getBigfootUser_Manager_RoleMenuService',
            'bigfoot_user.manager.user' => 'getBigfootUser_Manager_UserService',
            'bigfoot_user.subscriber.menu' => 'getBigfootUser_Subscriber_MenuService',
            'bigfoot_user.subscriber.settings' => 'getBigfootUser_Subscriber_SettingsService',
            'bigfoot_user.subscriber.user' => 'getBigfootUser_Subscriber_UserService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'craue.form.flow' => 'getCraue_Form_FlowService',
            'craue.form.flow.data_manager' => 'getCraue_Form_Flow_DataManagerService',
            'craue.form.flow.event_listener.flow_expired' => 'getCraue_Form_Flow_EventListener_FlowExpiredService',
            'craue.form.flow.event_listener.previous_step_invalid' => 'getCraue_Form_Flow_EventListener_PreviousStepInvalidService',
            'craue.form.flow.form_extension' => 'getCraue_Form_Flow_FormExtensionService',
            'craue.form.flow.hidden_field_extension' => 'getCraue_Form_Flow_HiddenFieldExtensionService',
            'craue.form.flow.storage' => 'getCraue_Form_Flow_StorageService',
            'craue_formflow_util' => 'getCraueFormflowUtilService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.bigfoot_richtext' => 'getForm_Type_BigfootRichtextService',
            'form.type.bigfoot_route' => 'getForm_Type_BigfootRouteService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.portfolio_search' => 'getForm_Type_PortfolioSearchService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.role_menu' => 'getForm_Type_RoleMenuService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.sortable' => 'getForm_Type_SortableService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.translatable' => 'getForm_Type_TranslatableService',
            'form.type.translatable_label' => 'getForm_Type_TranslatableLabelService',
            'form.type.translatable_label_translation' => 'getForm_Type_TranslatableLabelTranslationService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService',
            'jms_translation.file_source_factory' => 'getJmsTranslation_FileSourceFactoryService',
            'jms_translation.loader_manager' => 'getJmsTranslation_LoaderManagerService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'kernel.listener.bigfoot_controller_listener' => 'getKernel_Listener_BigfootControllerListenerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.helper' => 'getKnpMenu_HelperService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.manipulator' => 'getKnpMenu_ManipulatorService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.mozjpeg' => 'getLiipImagine_Filter_PostProcessor_MozjpegService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.filter.post_processor.pngquant' => 'getLiipImagine_Filter_PostProcessor_PngquantService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.default' => 'getRouter_DefaultService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.back_office' => 'getSecurity_Firewall_Map_Context_BackOfficeService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.login_admin_firewall' => 'getSecurity_Firewall_Map_Context_LoginAdminFirewallService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.bigfoot' => 'getSecurity_User_Provider_Concrete_BigfootService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.user_checker.login_admin_firewall' => 'getSecurity_UserChecker_LoginAdminFirewallService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.event_listener.blame' => 'getStofDoctrineExtensions_EventListener_BlameService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.listener.blameable' => 'getStofDoctrineExtensions_Listener_BlameableService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.craue_formflow' => 'getTwig_Extension_CraueFormflowService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.extension.text' => 'getTwig_Extension_TextService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'twig_js.assetic_filter' => 'getTwigJs_AsseticFilterService',
            'twig_js.compile_request_handler' => 'getTwigJs_CompileRequestHandlerService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->aliases = array(
            'bigfoot_context' => 'bigfoot_context.service.context',
            'bigfoot_media.provider.media' => 'bigfoot_media.provider.default',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'router' => 'be_simple_i18n_routing.router',
            'security.user_checker.back_office' => 'security.user_checker.login_admin_firewall',
            'security.user_checker.main' => 'security.user_checker.login_admin_firewall',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/app/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/app/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/app/Resources/DoctrineFixturesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpPaginatorBundle', ($this->targetDirs[3].'/app/Resources/KnpPaginatorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpPaginatorBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/app/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[3].'/app/Resources/BazingaJsTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BeSimpleI18nRoutingBundle', ($this->targetDirs[3].'/app/Resources/BeSimpleI18nRoutingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BeSimpleI18nRoutingBundle', ($this->targetDirs[3].'/vendor/besimple/i18n-routing-bundle/BeSimple/I18nRoutingBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CraueFormFlowBundle', ($this->targetDirs[3].'/app/Resources/CraueFormFlowBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CraueFormFlowBundle', ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', ($this->targetDirs[3].'/app/Resources/FOSJsRoutingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSJsRoutingBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTwigJsBundle', ($this->targetDirs[3].'/app/Resources/JMSTwigJsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTwigJsBundle', ($this->targetDirs[3].'/vendor/jms/twig-js-bundle/JMS/TwigJsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[3].'/app/Resources/JMSSerializerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTranslationBundle', ($this->targetDirs[3].'/app/Resources/JMSTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSTranslationBundle', ($this->targetDirs[3].'/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[3].'/app/Resources/LiipImagineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[3].'/app/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', ($this->targetDirs[3].'/app/Resources/WhiteOctoberPagerfantaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootCoreBundle', ($this->targetDirs[3].'/app/Resources/BigfootCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootCoreBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootContextBundle', ($this->targetDirs[3].'/app/Resources/BigfootContextBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootContextBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-context-bundle/Bigfoot/Bundle/ContextBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootNavigationBundle', ($this->targetDirs[3].'/app/Resources/BigfootNavigationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootNavigationBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-navigation-bundle/Bigfoot/Bundle/NavigationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootUserBundle', ($this->targetDirs[3].'/app/Resources/BigfootUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootUserBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootContentBundle', ($this->targetDirs[3].'/app/Resources/BigfootContentBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootContentBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-content-bundle/Bigfoot/Bundle/ContentBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootDefaultThemeBundle', ($this->targetDirs[3].'/app/Resources/BigfootDefaultThemeBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootDefaultThemeBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootMediaBundle', ($this->targetDirs[3].'/app/Resources/BigfootMediaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BigfootMediaBundle', ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/app/Resources/AppBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'/src/AppBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'/app/Resources/DebugBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'/app/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'/app/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'/app/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'twig_js' => 'twig_js.assetic_filter'));
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'bazinga.jstranslation.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Controller\Controller A Bazinga\Bundle\JsTranslationBundle\Controller\Controller instance
     */
    protected function getBazinga_Jstranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.controller'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Controller\Controller($this->get('translator'), $this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), (__DIR__.'/bazinga-js-translation'), true, 'en', 'messages', 700);

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        $instance->addLoader('db', $this->get('bigfoot.translation.database_loader'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.jstranslation.translation_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper A Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper instance
     */
    protected function getBazinga_Jstranslation_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['bazinga.jstranslation.translation_dumper'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper($this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), $this->get('be_simple_i18n_routing.router'), $this->get('filesystem'), 'en', 'messages', array(), array());

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        $instance->addLoader('db', $this->get('bigfoot.translation.database_loader'));

        return $instance;
    }

    /**
     * Gets the 'bazinga.jstranslation.translation_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder A Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder instance
     */
    protected function getBazinga_Jstranslation_TranslationFinderService()
    {
        return $this->services['bazinga.jstranslation.translation_finder'] = new \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder(array('sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/translations/messages.fr.yml'), 7 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/translations/messages.fr.yml'), 8 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/translations/messages.fr.yml'), 9 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/translations/messages.fr.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.de.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.de.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.es.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.es.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.zh_CN.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.pt_BR.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lt.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.bg.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.en.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/translations/messages.en.yml'), 7 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/translations/messages.en.yml'), 8 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/translations/messages.en.yml'), 9 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/translations/messages.en.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.ru.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.cs.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ja.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.uk.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.zh_TW.yml'), 2 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.zh_TW.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.vi.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.sk.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.fa.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf'))));
    }

    /**
     * Gets the 'be_simple_i18n_routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \BeSimple\I18nRoutingBundle\Routing\Router A BeSimple\I18nRoutingBundle\Routing\Router instance
     */
    protected function getBeSimpleI18nRouting_RouterService()
    {
        return $this->services['be_simple_i18n_routing.router'] = new \BeSimple\I18nRoutingBundle\Routing\Router($this->get('router.default'), NULL, 'en');
    }

    /**
     * Gets the 'bigfoot.dashboard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Controller\DashboardController A Bigfoot\Bundle\CoreBundle\Controller\DashboardController instance
     */
    protected function getBigfoot_DashboardService()
    {
        $this->services['bigfoot.dashboard'] = $instance = new \Bigfoot\Bundle\CoreBundle\Controller\DashboardController();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'bigfoot.form.datepicker.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootDatepickerType A Bigfoot\Bundle\CoreBundle\Form\Type\BigfootDatepickerType instance
     */
    protected function getBigfoot_Form_Datepicker_TypeService()
    {
        return $this->services['bigfoot.form.datepicker.type'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootDatepickerType($this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot.form.type.bigfoot_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Form\Type\BigfootMediaType A Bigfoot\Bundle\MediaBundle\Form\Type\BigfootMediaType instance
     */
    protected function getBigfoot_Form_Type_BigfootMediaService()
    {
        $this->services['bigfoot.form.type.bigfoot_media'] = $instance = new \Bigfoot\Bundle\MediaBundle\Form\Type\BigfootMediaType();

        $instance->setProvider($this->get('bigfoot_media.provider.default'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot.form.type.bigfoot_media_mediatype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Form\MediaType A Bigfoot\Bundle\MediaBundle\Form\MediaType instance
     */
    protected function getBigfoot_Form_Type_BigfootMediaMediatypeService()
    {
        return $this->services['bigfoot.form.type.bigfoot_media_mediatype'] = new \Bigfoot\Bundle\MediaBundle\Form\MediaType($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot.form.type.bigfoot_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootTagType A Bigfoot\Bundle\CoreBundle\Form\Type\BigfootTagType instance
     */
    protected function getBigfoot_Form_Type_BigfootTagService()
    {
        return $this->services['bigfoot.form.type.bigfoot_tag'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootTagType($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot.form.type.collection_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\CollectionItemType A Bigfoot\Bundle\CoreBundle\Form\Type\CollectionItemType instance
     */
    protected function getBigfoot_Form_Type_CollectionItemService()
    {
        return $this->services['bigfoot.form.type.collection_item'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\CollectionItemType();
    }

    /**
     * Gets the 'bigfoot.form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\FileType A Bigfoot\Bundle\CoreBundle\Form\Type\FileType instance
     */
    protected function getBigfoot_Form_Type_FileService()
    {
        return $this->services['bigfoot.form.type.file'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\FileType();
    }

    /**
     * Gets the 'bigfoot.form.type.quicklink' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\QuickLinkType A Bigfoot\Bundle\CoreBundle\Form\QuickLinkType instance
     */
    protected function getBigfoot_Form_Type_QuicklinkService()
    {
        return $this->services['bigfoot.form.type.quicklink'] = new \Bigfoot\Bundle\CoreBundle\Form\QuickLinkType($this->get('request_stack'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot.form.type.sortable_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\SortableCollectionType A Bigfoot\Bundle\CoreBundle\Form\Type\SortableCollectionType instance
     */
    protected function getBigfoot_Form_Type_SortableCollectionService()
    {
        return $this->services['bigfoot.form.type.sortable_collection'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\SortableCollectionType();
    }

    /**
     * Gets the 'bigfoot.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Theme\Theme A Bigfoot\Bundle\CoreBundle\Theme\Theme instance
     */
    protected function getBigfoot_ThemeService()
    {
        $this->services['bigfoot.theme'] = $instance = new \Bigfoot\Bundle\CoreBundle\Theme\Theme($this, new \Bigfoot\Bundle\CoreBundle\Theme\Section\ToolbarSection($this), new \Bigfoot\Bundle\CoreBundle\Theme\Section\HeaderSection($this), new \Bigfoot\Bundle\CoreBundle\Theme\Section\SidebarSection($this), new \Bigfoot\Bundle\CoreBundle\Theme\Section\PageHeaderSection($this), new \Bigfoot\Bundle\CoreBundle\Theme\Section\PageContentSection($this), new \Bigfoot\Bundle\CoreBundle\Theme\Section\FooterSection($this));

        $instance->setTwigNamespace('BigfootDefaultThemeBundle');

        return $instance;
    }

    /**
     * Gets the 'bigfoot.translation.database_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Translation\DatabaseLoader A Bigfoot\Bundle\CoreBundle\Translation\DatabaseLoader instance
     */
    protected function getBigfoot_Translation_DatabaseLoaderService()
    {
        return $this->services['bigfoot.translation.database_loader'] = new \Bigfoot\Bundle\CoreBundle\Translation\DatabaseLoader($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot.twig.medias_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Twig\MediasExtension A Bigfoot\Bundle\MediaBundle\Twig\MediasExtension instance
     */
    protected function getBigfoot_Twig_MediasExtensionService()
    {
        $this->services['bigfoot.twig.medias_extension'] = $instance = new \Bigfoot\Bundle\MediaBundle\Twig\MediasExtension();

        $instance->setProvider($this->get('bigfoot_media.provider.default'));
        $instance->setRequestStack($this->get('request_stack'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_content.form.type.block_template_title2_desc2_media2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\Title2Desc2Media2Type A Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\Title2Desc2Media2Type instance
     */
    protected function getBigfootContent_Form_Type_BlockTemplateTitle2Desc2Media2Service()
    {
        return $this->services['bigfoot_content.form.type.block_template_title2_desc2_media2'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\Title2Desc2Media2Type();
    }

    /**
     * Gets the 'bigfoot_content.form.type.block_template_title_desc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescType A Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescType instance
     */
    protected function getBigfootContent_Form_Type_BlockTemplateTitleDescService()
    {
        return $this->services['bigfoot_content.form.type.block_template_title_desc'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.block_template_title_desc_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescMediaType A Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescMediaType instance
     */
    protected function getBigfootContent_Form_Type_BlockTemplateTitleDescMediaService()
    {
        return $this->services['bigfoot_content.form.type.block_template_title_desc_media'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Block\Template\TitleDescMediaType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\ContentType A Bigfoot\Bundle\ContentBundle\Form\Type\ContentType instance
     */
    protected function getBigfootContent_Form_Type_ContentService()
    {
        return $this->services['bigfoot_content.form.type.content'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\ContentType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\BlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\BlockType instance
     */
    protected function getBigfootContent_Form_Type_PageBlockService()
    {
        return $this->services['bigfoot_content.form.type.page_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\BlockType(array('title_desc_media' => array('class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Block\\Template\\TitleDescMedia', 'sub_templates' => array('title_desc_media_1' => 'Block (Title + Description + Media)', 'title_desc_media_2' => 'Block (Title + Description + Media)', 'title_desc_media_3' => 'Block (Title + Description + Media)', 'title_desc_media_4' => 'Block (Title + Description + Media)', 'title_desc_media_5' => 'Block (Title + Description + Media)'))));
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\SidebarType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\SidebarType instance
     */
    protected function getBigfootContent_Form_Type_PageSidebarService()
    {
        return $this->services['bigfoot_content.form.type.page_sidebar'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\SidebarType(array('block' => array('class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Sidebar\\Template\\Block', 'sub_templates' => array('block_1' => 'Blocks'))));
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Type A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Type instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDesc2Service()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc2'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Type();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc2_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Block2Type A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Block2Type instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDesc2BlockService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc2_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2Block2Type();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc2_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc2_media'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc2_media_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlockType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaBlockService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc2_media_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc2_media_block2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlock2Type A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlock2Type instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDesc2MediaBlock2Service()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc2_media_block2'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDesc2MediaBlock2Type();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescBlockService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_block_sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockSidebarType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockSidebarType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescBlockSidebarService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_block_sidebar'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescBlockSidebarType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescMediaService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_media'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_media_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlockService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_media_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_media_block2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlock2Type A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlock2Type instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlock2Service()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_media_block2'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlock2Type();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_media_block_sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockSidebarType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockSidebarType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescMediaBlockSidebarService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_media_block_sidebar'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaBlockSidebarType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_media_sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaSidebarType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaSidebarType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescMediaSidebarService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_media_sidebar'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescMediaSidebarType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.page_template_title_desc_sidebar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescSidebarType A Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescSidebarType instance
     */
    protected function getBigfootContent_Form_Type_PageTemplateTitleDescSidebarService()
    {
        return $this->services['bigfoot_content.form.type.page_template_title_desc_sidebar'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Page\Template\TitleDescSidebarType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\BlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\BlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\BlockType(array('title_desc_media' => array('class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Block\\Template\\TitleDescMedia', 'sub_templates' => array('title_desc_media_1' => 'Block (Title + Description + Media)', 'title_desc_media_2' => 'Block (Title + Description + Media)', 'title_desc_media_3' => 'Block (Title + Description + Media)', 'title_desc_media_4' => 'Block (Title + Description + Media)', 'title_desc_media_5' => 'Block (Title + Description + Media)'))));
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\BlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\BlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\BlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_media_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\MediaBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\MediaBlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateMediaBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_media_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\MediaBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_title_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleBlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateTitleBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_title_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_title_desc_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescBlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateTitleDescBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_title_desc_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_title_desc_media_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescMediaBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescMediaBlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateTitleDescMediaBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_title_desc_media_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleDescMediaBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.sidebar_template_title_media_block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleMediaBlockType A Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleMediaBlockType instance
     */
    protected function getBigfootContent_Form_Type_SidebarTemplateTitleMediaBlockService()
    {
        return $this->services['bigfoot_content.form.type.sidebar_template_title_media_block'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\Sidebar\Template\TitleMediaBlockType();
    }

    /**
     * Gets the 'bigfoot_content.form.type.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Form\Type\TemplateType A Bigfoot\Bundle\ContentBundle\Form\Type\TemplateType instance
     */
    protected function getBigfootContent_Form_Type_TemplateService()
    {
        return $this->services['bigfoot_content.form.type.template'] = new \Bigfoot\Bundle\ContentBundle\Form\Type\TemplateType();
    }

    /**
     * Gets the 'bigfoot_content.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\ContentBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootContent_Subscriber_MenuService()
    {
        return $this->services['bigfoot_content.subscriber.menu'] = new \Bigfoot\Bundle\ContentBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_content.twig.extension.content' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContentBundle\Twig\Extension\ContentExtension A Bigfoot\Bundle\ContentBundle\Twig\Extension\ContentExtension instance
     */
    protected function getBigfootContent_Twig_Extension_ContentService()
    {
        return $this->services['bigfoot_content.twig.extension.content'] = new \Bigfoot\Bundle\ContentBundle\Twig\Extension\ContentExtension($this->get('twig'), $this->get('router.default'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_context.chain.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Loader\LoaderChain A Bigfoot\Bundle\ContextBundle\Loader\LoaderChain instance
     */
    protected function getBigfootContext_Chain_LoaderService()
    {
        $this->services['bigfoot_context.chain.loader'] = $instance = new \Bigfoot\Bundle\ContextBundle\Loader\LoaderChain();

        $instance->addLoader($this->get('bigfoot_context.language_back.loader'), 'bigfoot_context.language_back.loader');

        return $instance;
    }

    /**
     * Gets the 'bigfoot_context.form.extension.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Form\Extension\ContextExtension A Bigfoot\Bundle\ContextBundle\Form\Extension\ContextExtension instance
     */
    protected function getBigfootContext_Form_Extension_ContextService()
    {
        return $this->services['bigfoot_context.form.extension.context'] = new \Bigfoot\Bundle\ContextBundle\Form\Extension\ContextExtension($this->get('bigfoot_context.repository.context'));
    }

    /**
     * Gets the 'bigfoot_context.form.type.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Form\Type\ContextType A Bigfoot\Bundle\ContextBundle\Form\Type\ContextType instance
     */
    protected function getBigfootContext_Form_Type_ContextService()
    {
        return $this->services['bigfoot_context.form.type.context'] = new \Bigfoot\Bundle\ContextBundle\Form\Type\ContextType($this->get('doctrine.orm.default_entity_manager'), $this->get('session'), $this->get('security.authorization_checker'), $this->get('bigfoot_context.service.context'), $this->get('bigfoot_context.manager.context'));
    }

    /**
     * Gets the 'bigfoot_context.language_back.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Loader\LanguageBackLoader A Bigfoot\Bundle\ContextBundle\Loader\LanguageBackLoader instance
     */
    protected function getBigfootContext_LanguageBack_LoaderService()
    {
        $this->services['bigfoot_context.language_back.loader'] = $instance = new \Bigfoot\Bundle\ContextBundle\Loader\LanguageBackLoader();

        if ($this->has('request_stack')) {
            $instance->setRequestStack($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        $instance->setContexts(array('language_back' => array('loaders' => array('bigfoot' => 'bigfoot_context.language_back.loader'), 'default_value' => 'en', 'values' => array('fr' => array('value' => 'fr', 'label' => 'Français', 'parameters' => array('date_format' => 'dd/MM/yyyy', 'default_front_locale' => 'fr')), 'en' => array('value' => 'en', 'label' => 'Anglais', 'parameters' => array('date_format' => 'MM/dd/yyyy', 'default_front_locale' => 'en'))))));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_context.manager.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Manager\ContextManager A Bigfoot\Bundle\ContextBundle\Manager\ContextManager instance
     */
    protected function getBigfootContext_Manager_ContextService()
    {
        return $this->services['bigfoot_context.manager.context'] = new \Bigfoot\Bundle\ContextBundle\Manager\ContextManager($this->get('doctrine.orm.default_entity_manager'), array());
    }

    /**
     * Gets the 'bigfoot_context.repository.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Entity\ContextRepository A Bigfoot\Bundle\ContextBundle\Entity\ContextRepository instance
     */
    protected function getBigfootContext_Repository_ContextService()
    {
        $this->services['bigfoot_context.repository.context'] = $instance = $this->get('doctrine.orm.default_entity_manager')->getRepository('BigfootContextBundle:Context');

        $instance->setSession($this->get('session'));
        $instance->setContextService($this->get('bigfoot_context.service.context'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_context.service.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Service\ContextService A Bigfoot\Bundle\ContextBundle\Service\ContextService instance
     */
    protected function getBigfootContext_Service_ContextService()
    {
        return $this->services['bigfoot_context.service.context'] = new \Bigfoot\Bundle\ContextBundle\Service\ContextService($this->get('bigfoot_context.chain.loader'), array('language_back' => array('loaders' => array('bigfoot' => 'bigfoot_context.language_back.loader'), 'default_value' => 'en', 'values' => array('fr' => array('value' => 'fr', 'label' => 'Français', 'parameters' => array('date_format' => 'dd/MM/yyyy', 'default_front_locale' => 'fr')), 'en' => array('value' => 'en', 'label' => 'Anglais', 'parameters' => array('date_format' => 'MM/dd/yyyy', 'default_front_locale' => 'en'))))), array(), $this->get('kernel'));
    }

    /**
     * Gets the 'bigfoot_context.subscriber.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Subscriber\DoctrineSubscriber A Bigfoot\Bundle\ContextBundle\Subscriber\DoctrineSubscriber instance
     */
    protected function getBigfootContext_Subscriber_DoctrineService()
    {
        return $this->services['bigfoot_context.subscriber.doctrine'] = new \Bigfoot\Bundle\ContextBundle\Subscriber\DoctrineSubscriber($this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_context.subscriber.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Subscriber\FormSubscriber A Bigfoot\Bundle\ContextBundle\Subscriber\FormSubscriber instance
     */
    protected function getBigfootContext_Subscriber_FormService()
    {
        return $this->services['bigfoot_context.subscriber.form'] = new \Bigfoot\Bundle\ContextBundle\Subscriber\FormSubscriber($this->get('form.factory'), $this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_context.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\ContextBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootContext_Subscriber_MenuService()
    {
        return $this->services['bigfoot_context.subscriber.menu'] = new \Bigfoot\Bundle\ContextBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_context.twig.extension.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Twig\Extension\ContextExtension A Bigfoot\Bundle\ContextBundle\Twig\Extension\ContextExtension instance
     */
    protected function getBigfootContext_Twig_Extension_ContextService()
    {
        return $this->services['bigfoot_context.twig.extension.context'] = new \Bigfoot\Bundle\ContextBundle\Twig\Extension\ContextExtension($this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_context.voter.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\ContextBundle\Security\Core\Authorization\Voter\ContextVoter A Bigfoot\Bundle\ContextBundle\Security\Core\Authorization\Voter\ContextVoter instance
     */
    protected function getBigfootContext_Voter_ContextService()
    {
        return $this->services['bigfoot_context.voter.context'] = new \Bigfoot\Bundle\ContextBundle\Security\Core\Authorization\Voter\ContextVoter($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_core.cmf_routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Routing\Router A Symfony\Component\Routing\Router instance
     */
    protected function getBigfootCore_CmfRouting_RouterService()
    {
        $this->services['bigfoot_core.cmf_routing.router'] = $instance = new \Symfony\Component\Routing\Router($this->get('logger'));

        $instance->setContext($this->get('router.request_context'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_core.crud.formatter.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Crud\Formatter\DateFormatter A Bigfoot\Bundle\CoreBundle\Crud\Formatter\DateFormatter instance
     */
    protected function getBigfootCore_Crud_Formatter_DateService()
    {
        return $this->services['bigfoot_core.crud.formatter.date'] = new \Bigfoot\Bundle\CoreBundle\Crud\Formatter\DateFormatter('d/m/Y');
    }

    /**
     * Gets the 'bigfoot_core.crud.formatter.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Crud\Formatter\Loader A Bigfoot\Bundle\CoreBundle\Crud\Formatter\Loader instance
     */
    protected function getBigfootCore_Crud_Formatter_LoaderService()
    {
        $this->services['bigfoot_core.crud.formatter.loader'] = $instance = new \Bigfoot\Bundle\CoreBundle\Crud\Formatter\Loader();

        $instance->addFormatter($this->get('bigfoot_core.crud.formatter.date'), 'bigfoot_core.crud.formatter.date');
        $instance->addFormatter($this->get('bigfoot_core.crud.formatter.trans'), 'bigfoot_core.crud.formatter.trans');

        return $instance;
    }

    /**
     * Gets the 'bigfoot_core.crud.formatter.trans' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Crud\Formatter\TranslationFormatter A Bigfoot\Bundle\CoreBundle\Crud\Formatter\TranslationFormatter instance
     */
    protected function getBigfootCore_Crud_Formatter_TransService()
    {
        return $this->services['bigfoot_core.crud.formatter.trans'] = new \Bigfoot\Bundle\CoreBundle\Crud\Formatter\TranslationFormatter($this->get('translator'));
    }

    /**
     * Gets the 'bigfoot_core.doctrine_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Listener\DoctrineListener A Bigfoot\Bundle\CoreBundle\Listener\DoctrineListener instance
     */
    protected function getBigfootCore_DoctrineListenerService()
    {
        return $this->services['bigfoot_core.doctrine_listener'] = new \Bigfoot\Bundle\CoreBundle\Listener\DoctrineListener($this->get('bigfoot_core.manager.file_manager'));
    }

    /**
     * Gets the 'bigfoot_core.form.type.filters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\FilterType A Bigfoot\Bundle\CoreBundle\Form\Type\FilterType instance
     */
    protected function getBigfootCore_Form_Type_FiltersService()
    {
        return $this->services['bigfoot_core.form.type.filters'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\FilterType($this->get('bigfoot_core.manager.filters'));
    }

    /**
     * Gets the 'bigfoot_core.form.type.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\SettingsType A Bigfoot\Bundle\CoreBundle\Form\Type\SettingsType instance
     */
    protected function getBigfootCore_Form_Type_SettingsService()
    {
        return $this->services['bigfoot_core.form.type.settings'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\SettingsType($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'bigfoot_core.generator.token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Generator\TokenGenerator A Bigfoot\Bundle\CoreBundle\Generator\TokenGenerator instance
     */
    protected function getBigfootCore_Generator_TokenService()
    {
        return $this->services['bigfoot_core.generator.token'] = new \Bigfoot\Bundle\CoreBundle\Generator\TokenGenerator();
    }

    /**
     * Gets the 'bigfoot_core.kernel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Listener\KernelListener A Bigfoot\Bundle\CoreBundle\Listener\KernelListener instance
     */
    protected function getBigfootCore_KernelListenerService()
    {
        return $this->services['bigfoot_core.kernel_listener'] = new \Bigfoot\Bundle\CoreBundle\Listener\KernelListener($this->get('stof_doctrine_extensions.listener.translatable'), $this->get('kernel'), $this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_core.manager.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Manager\CsvManager A Bigfoot\Bundle\CoreBundle\Manager\CsvManager instance
     */
    protected function getBigfootCore_Manager_CsvService()
    {
        return $this->services['bigfoot_core.manager.csv'] = new \Bigfoot\Bundle\CoreBundle\Manager\CsvManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_core.manager.file_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Manager\FileManager A Bigfoot\Bundle\CoreBundle\Manager\FileManager instance
     */
    protected function getBigfootCore_Manager_FileManagerService()
    {
        $this->services['bigfoot_core.manager.file_manager'] = $instance = new \Bigfoot\Bundle\CoreBundle\Manager\FileManager();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'bigfoot_core.manager.filters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Manager\FilterManager A Bigfoot\Bundle\CoreBundle\Manager\FilterManager instance
     */
    protected function getBigfootCore_Manager_FiltersService()
    {
        return $this->services['bigfoot_core.manager.filters'] = new \Bigfoot\Bundle\CoreBundle\Manager\FilterManager($this->get('form.factory'), $this->get('doctrine.orm.default_entity_manager'), $this->get('session'), $this->get('request_stack'));
    }

    /**
     * Gets the 'bigfoot_core.manager.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Menu\MenuManager A Bigfoot\Bundle\CoreBundle\Menu\MenuManager instance
     */
    protected function getBigfootCore_Manager_MenuService()
    {
        return $this->services['bigfoot_core.manager.menu'] = new \Bigfoot\Bundle\CoreBundle\Menu\MenuManager($this->get('knp_menu.factory'), $this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_core.manager.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Manager\SettingsManager A Bigfoot\Bundle\CoreBundle\Manager\SettingsManager instance
     */
    protected function getBigfootCore_Manager_SettingsService()
    {
        return $this->services['bigfoot_core.manager.settings'] = new \Bigfoot\Bundle\CoreBundle\Manager\SettingsManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_core.manager.translatable_label' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Manager\TranslatableLabelManager A Bigfoot\Bundle\CoreBundle\Manager\TranslatableLabelManager instance
     */
    protected function getBigfootCore_Manager_TranslatableLabelService()
    {
        return $this->services['bigfoot_core.manager.translatable_label'] = new \Bigfoot\Bundle\CoreBundle\Manager\TranslatableLabelManager(__DIR__, $this->get('filesystem'));
    }

    /**
     * Gets the 'bigfoot_core.menu.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getBigfootCore_Menu_MainService()
    {
        return $this->services['bigfoot_core.menu.main'] = $this->get('bigfoot_core.menu_builder')->createMainMenu($this->get('request_stack'));
    }

    /**
     * Gets the 'bigfoot_core.menu.test' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getBigfootCore_Menu_TestService()
    {
        return $this->services['bigfoot_core.menu.test'] = $this->get('bigfoot_core.menu_builder')->createMainMenu($this->get('request_stack'));
    }

    /**
     * Gets the 'bigfoot_core.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Menu\Builder A Bigfoot\Bundle\CoreBundle\Menu\Builder instance
     */
    protected function getBigfootCore_MenuBuilderService()
    {
        return $this->services['bigfoot_core.menu_builder'] = new \Bigfoot\Bundle\CoreBundle\Menu\Builder($this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'), $this->get('debug.event_dispatcher'), $this->get('bigfoot_core.manager.menu'));
    }

    /**
     * Gets the 'bigfoot_core.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Entity\RouteRepository A Bigfoot\Bundle\CoreBundle\Entity\RouteRepository instance
     */
    protected function getBigfootCore_RouterService()
    {
        $this->services['bigfoot_core.router'] = $instance = $this->get('doctrine.orm.default_entity_manager')->getRepository('BigfootCoreBundle:Route');

        $instance->setRequestStack($this->get('request_stack'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_core.subscriber.knp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Subscriber\KnpSubscriber A Bigfoot\Bundle\CoreBundle\Subscriber\KnpSubscriber instance
     */
    protected function getBigfootCore_Subscriber_KnpService()
    {
        $this->services['bigfoot_core.subscriber.knp'] = $instance = new \Bigfoot\Bundle\CoreBundle\Subscriber\KnpSubscriber();

        $instance->setRequestStack($this->get('request_stack'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_core.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\CoreBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootCore_Subscriber_MenuService()
    {
        return $this->services['bigfoot_core.subscriber.menu'] = new \Bigfoot\Bundle\CoreBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_core.translatable_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\EventListener\TranslationSubscriber A Bigfoot\Bundle\CoreBundle\Form\EventListener\TranslationSubscriber instance
     */
    protected function getBigfootCore_TranslatableSubscriberService()
    {
        return $this->services['bigfoot_core.translatable_subscriber'] = new \Bigfoot\Bundle\CoreBundle\Form\EventListener\TranslationSubscriber(array('fr' => array('label' => 'French', 'value' => 'fr', 'parameters' => array('default_country' => 'FR', 'fullLocale' => 'fr_FR', 'domain' => 'http://127.0.0.1:7080/')), 'en' => array('label' => 'English', 'value' => 'en', 'parameters' => array('default_country' => 'GB', 'fullLocale' => 'en_GB', 'domain' => 'http://127.0.0.1:7080/en/'))), $this->get('doctrine'), $this->get('annotation_reader'), $this->get('bigfoot_core.translation.repository'), 'en', $this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_core.translation.convert' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Translation\Convert A Bigfoot\Bundle\CoreBundle\Translation\Convert instance
     */
    protected function getBigfootCore_Translation_ConvertService()
    {
        return $this->services['bigfoot_core.translation.convert'] = new \Bigfoot\Bundle\CoreBundle\Translation\Convert($this->get('kernel'));
    }

    /**
     * Gets the 'bigfoot_core.translation.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Entity\TranslationRepository A Bigfoot\Bundle\CoreBundle\Entity\TranslationRepository instance
     */
    protected function getBigfootCore_Translation_RepositoryService()
    {
        return $this->services['bigfoot_core.translation.repository'] = new \Bigfoot\Bundle\CoreBundle\Entity\TranslationRepository($this->get('doctrine.orm.default_entity_manager'), $this->get('annotation_reader'), $this->get('property_accessor'));
    }

    /**
     * Gets the 'bigfoot_core.twig.file_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Twig\FileExtension A Bigfoot\Bundle\CoreBundle\Twig\FileExtension instance
     */
    protected function getBigfootCore_Twig_FileExtensionService()
    {
        return $this->services['bigfoot_core.twig.file_extension'] = new \Bigfoot\Bundle\CoreBundle\Twig\FileExtension($this->get('bigfoot_core.manager.file_manager'));
    }

    /**
     * Gets the 'bigfoot_core.twig.formatter_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Twig\Crud\FormatterExtension A Bigfoot\Bundle\CoreBundle\Twig\Crud\FormatterExtension instance
     */
    protected function getBigfootCore_Twig_FormatterExtensionService()
    {
        return $this->services['bigfoot_core.twig.formatter_extension'] = new \Bigfoot\Bundle\CoreBundle\Twig\Crud\FormatterExtension($this->get('bigfoot_core.crud.formatter.loader'));
    }

    /**
     * Gets the 'bigfoot_core.twig.locale_flags_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Twig\LocalesFlagsExtension A Bigfoot\Bundle\CoreBundle\Twig\LocalesFlagsExtension instance
     */
    protected function getBigfootCore_Twig_LocaleFlagsExtensionService()
    {
        return $this->services['bigfoot_core.twig.locale_flags_extension'] = new \Bigfoot\Bundle\CoreBundle\Twig\LocalesFlagsExtension(array('fr' => array('label' => 'French', 'value' => 'fr', 'parameters' => array('default_country' => 'FR', 'fullLocale' => 'fr_FR', 'domain' => 'http://127.0.0.1:7080/')), 'en' => array('label' => 'English', 'value' => 'en', 'parameters' => array('default_country' => 'GB', 'fullLocale' => 'en_GB', 'domain' => 'http://127.0.0.1:7080/en/'))), $this->get('twig'));
    }

    /**
     * Gets the 'bigfoot_media.provider.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Provider\MediaProvider A Bigfoot\Bundle\MediaBundle\Provider\MediaProvider instance
     */
    protected function getBigfootMedia_Provider_DefaultService()
    {
        $this->services['bigfoot_media.provider.default'] = $instance = new \Bigfoot\Bundle\MediaBundle\Provider\MediaProvider($this->get('request_stack'));

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));
        $instance->setTheme($this->get('bigfoot.theme'));
        $instance->setSession($this->get('session'));

        return $instance;
    }

    /**
     * Gets the 'bigfoot_media.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\MediaBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootMedia_Subscriber_MenuService()
    {
        return $this->services['bigfoot_media.subscriber.menu'] = new \Bigfoot\Bundle\MediaBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_navigation.form.type.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Form\Type\LinkType A Bigfoot\Bundle\NavigationBundle\Form\Type\LinkType instance
     */
    protected function getBigfootNavigation_Form_Type_LinkService()
    {
        return $this->services['bigfoot_navigation.form.type.link'] = new \Bigfoot\Bundle\NavigationBundle\Form\Type\LinkType($this->get('be_simple_i18n_routing.router'));
    }

    /**
     * Gets the 'bigfoot_navigation.form.type.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Form\Type\MenuType A Bigfoot\Bundle\NavigationBundle\Form\Type\MenuType instance
     */
    protected function getBigfootNavigation_Form_Type_MenuService()
    {
        return $this->services['bigfoot_navigation.form.type.menu'] = new \Bigfoot\Bundle\NavigationBundle\Form\Type\MenuType($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_navigation.form.type.menu_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\ItemType A Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\ItemType instance
     */
    protected function getBigfootNavigation_Form_Type_MenuItemService()
    {
        $this->services['bigfoot_navigation.form.type.menu_item'] = $instance = new \Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\ItemType($this->get('doctrine.orm.default_entity_manager'));

        if ($this->has('request_stack')) {
            $instance->setRequestStack($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'bigfoot_navigation.form.type.menu_item_attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\Item\AttributeType A Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\Item\AttributeType instance
     */
    protected function getBigfootNavigation_Form_Type_MenuItemAttributeService()
    {
        return $this->services['bigfoot_navigation.form.type.menu_item_attribute'] = new \Bigfoot\Bundle\NavigationBundle\Form\Type\Menu\Item\AttributeType();
    }

    /**
     * Gets the 'bigfoot_navigation.form.type.route_parameter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Form\Type\Route\ParameterType A Bigfoot\Bundle\NavigationBundle\Form\Type\Route\ParameterType instance
     */
    protected function getBigfootNavigation_Form_Type_RouteParameterService()
    {
        return $this->services['bigfoot_navigation.form.type.route_parameter'] = new \Bigfoot\Bundle\NavigationBundle\Form\Type\Route\ParameterType($this->get('doctrine.orm.default_entity_manager'), $this->get('be_simple_i18n_routing.router'), 'en');
    }

    /**
     * Gets the 'bigfoot_navigation.manager.menu_item_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Manager\Menu\Item\UrlManager A Bigfoot\Bundle\NavigationBundle\Manager\Menu\Item\UrlManager instance
     */
    protected function getBigfootNavigation_Manager_MenuItemUrlService()
    {
        return $this->services['bigfoot_navigation.manager.menu_item_url'] = new \Bigfoot\Bundle\NavigationBundle\Manager\Menu\Item\UrlManager($this->get('doctrine.orm.default_entity_manager'), $this->get('router.default'), $this->get('bigfoot_context.service.context'));
    }

    /**
     * Gets the 'bigfoot_navigation.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\NavigationBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootNavigation_Subscriber_MenuService()
    {
        return $this->services['bigfoot_navigation.subscriber.menu'] = new \Bigfoot\Bundle\NavigationBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_navigation.twig.extension.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Twig\Extension\LinkExtension A Bigfoot\Bundle\NavigationBundle\Twig\Extension\LinkExtension instance
     */
    protected function getBigfootNavigation_Twig_Extension_LinkService()
    {
        return $this->services['bigfoot_navigation.twig.extension.link'] = new \Bigfoot\Bundle\NavigationBundle\Twig\Extension\LinkExtension($this->get('bigfoot_navigation.manager.menu_item_url'));
    }

    /**
     * Gets the 'bigfoot_navigation.twig.extension.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\NavigationBundle\Twig\Extension\MenuExtension A Bigfoot\Bundle\NavigationBundle\Twig\Extension\MenuExtension instance
     */
    protected function getBigfootNavigation_Twig_Extension_MenuService()
    {
        return $this->services['bigfoot_navigation.twig.extension.menu'] = new \Bigfoot\Bundle\NavigationBundle\Twig\Extension\MenuExtension($this->get('knp_menu.helper'), $this->get('knp_menu.matcher'), $this->get('bigfoot_navigation.manager.menu_item_url'));
    }

    /**
     * Gets the 'bigfoot_user.form.type.forgot_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Form\Type\ForgotPasswordType A Bigfoot\Bundle\UserBundle\Form\Type\ForgotPasswordType instance
     */
    protected function getBigfootUser_Form_Type_ForgotPasswordService()
    {
        return $this->services['bigfoot_user.form.type.forgot_password'] = new \Bigfoot\Bundle\UserBundle\Form\Type\ForgotPasswordType($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_user.form.type.reset_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Form\Type\ResetPasswordType A Bigfoot\Bundle\UserBundle\Form\Type\ResetPasswordType instance
     */
    protected function getBigfootUser_Form_Type_ResetPasswordService()
    {
        return $this->services['bigfoot_user.form.type.reset_password'] = new \Bigfoot\Bundle\UserBundle\Form\Type\ResetPasswordType();
    }

    /**
     * Gets the 'bigfoot_user.form.type.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Form\Type\RoleType A Bigfoot\Bundle\UserBundle\Form\Type\RoleType instance
     */
    protected function getBigfootUser_Form_Type_RoleService()
    {
        return $this->services['bigfoot_user.form.type.role'] = new \Bigfoot\Bundle\UserBundle\Form\Type\RoleType();
    }

    /**
     * Gets the 'bigfoot_user.form.type.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Form\Type\UserType A Bigfoot\Bundle\UserBundle\Form\Type\UserType instance
     */
    protected function getBigfootUser_Form_Type_UserService()
    {
        return $this->services['bigfoot_user.form.type.user'] = new \Bigfoot\Bundle\UserBundle\Form\Type\UserType($this->get('security.authorization_checker'), $this->get('bigfoot_context.service.context'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'bigfoot_user.listener.kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Listener\KernelListener A Bigfoot\Bundle\UserBundle\Listener\KernelListener instance
     */
    protected function getBigfootUser_Listener_KernelService()
    {
        return $this->services['bigfoot_user.listener.kernel'] = new \Bigfoot\Bundle\UserBundle\Listener\KernelListener($this->get('security.token_storage'), $this->get('kernel'));
    }

    /**
     * Gets the 'bigfoot_user.mailer.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Mailer\UserMailer A Bigfoot\Bundle\UserBundle\Mailer\UserMailer instance
     */
    protected function getBigfootUser_Mailer_UserService()
    {
        $this->services['bigfoot_user.mailer.user'] = $instance = new \Bigfoot\Bundle\UserBundle\Mailer\UserMailer($this->get('debug.event_dispatcher'));

        $instance->setManager($this->get('doctrine.orm.default_entity_manager'));
        $instance->setMailer($this->get('swiftmailer.mailer.default'));
        $instance->setTemplating($this->get('templating'));
        $instance->setTranslator($this->get('translator'));
        $instance->setMailFrom('sf3@localhost.com');

        return $instance;
    }

    /**
     * Gets the 'bigfoot_user.manager.role_menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Manager\RoleMenuManager A Bigfoot\Bundle\UserBundle\Manager\RoleMenuManager instance
     */
    protected function getBigfootUser_Manager_RoleMenuService()
    {
        return $this->services['bigfoot_user.manager.role_menu'] = new \Bigfoot\Bundle\UserBundle\Manager\RoleMenuManager($this->get('request_stack'), $this->get('bigfoot_core.menu_builder'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'bigfoot_user.manager.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Manager\UserManager A Bigfoot\Bundle\UserBundle\Manager\UserManager instance
     */
    protected function getBigfootUser_Manager_UserService()
    {
        $this->services['bigfoot_user.manager.user'] = $instance = new \Bigfoot\Bundle\UserBundle\Manager\UserManager($this->get('doctrine.orm.default_entity_manager'), $this->get('security.encoder_factory'), $this->get('security.user_checker.login_admin_firewall'), $this->get('security.token_storage'), $this->get('session'), $this->get('bigfoot_context.service.context'), $this->get('bigfoot_user.mailer.user'), $this->get('bigfoot_core.generator.token'));

        if ($this->has('request_stack')) {
            $instance->setRequestStack($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'bigfoot_user.subscriber.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Subscriber\MenuSubscriber A Bigfoot\Bundle\UserBundle\Subscriber\MenuSubscriber instance
     */
    protected function getBigfootUser_Subscriber_MenuService()
    {
        return $this->services['bigfoot_user.subscriber.menu'] = new \Bigfoot\Bundle\UserBundle\Subscriber\MenuSubscriber($this->get('security.token_storage'));
    }

    /**
     * Gets the 'bigfoot_user.subscriber.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Subscriber\SettingsSubscriber A Bigfoot\Bundle\UserBundle\Subscriber\SettingsSubscriber instance
     */
    protected function getBigfootUser_Subscriber_SettingsService()
    {
        return $this->services['bigfoot_user.subscriber.settings'] = new \Bigfoot\Bundle\UserBundle\Subscriber\SettingsSubscriber();
    }

    /**
     * Gets the 'bigfoot_user.subscriber.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Subscriber\UserSubscriber A Bigfoot\Bundle\UserBundle\Subscriber\UserSubscriber instance
     */
    protected function getBigfootUser_Subscriber_UserService()
    {
        return $this->services['bigfoot_user.subscriber.user'] = new \Bigfoot\Bundle\UserBundle\Subscriber\UserSubscriber($this->get('bigfoot_user.manager.user'));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('be_simple_i18n_routing.router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
    }

    /**
     * Gets the 'craue.form.flow' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Form\FormFlow A Craue\FormFlowBundle\Form\FormFlow instance
     */
    protected function getCraue_Form_FlowService()
    {
        $this->services['craue.form.flow'] = $instance = new \Craue\FormFlowBundle\Form\FormFlow();

        $instance->setDataManager($this->get('craue.form.flow.data_manager'));
        $instance->setFormFactory($this->get('form.factory'));
        $instance->setRequestStack($this->get('request_stack'));
        if ($this->has('debug.event_dispatcher')) {
            $instance->setEventDispatcher($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'craue.form.flow.data_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Storage\DataManager A Craue\FormFlowBundle\Storage\DataManager instance
     */
    protected function getCraue_Form_Flow_DataManagerService()
    {
        return $this->services['craue.form.flow.data_manager'] = new \Craue\FormFlowBundle\Storage\DataManager($this->get('craue.form.flow.storage'));
    }

    /**
     * Gets the 'craue.form.flow.event_listener.flow_expired' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\EventListener\FlowExpiredEventListener A Craue\FormFlowBundle\EventListener\FlowExpiredEventListener instance
     */
    protected function getCraue_Form_Flow_EventListener_FlowExpiredService()
    {
        $this->services['craue.form.flow.event_listener.flow_expired'] = $instance = new \Craue\FormFlowBundle\EventListener\FlowExpiredEventListener();

        $instance->setTranslator($this->get('translator'));

        return $instance;
    }

    /**
     * Gets the 'craue.form.flow.event_listener.previous_step_invalid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\EventListener\PreviousStepInvalidEventListener A Craue\FormFlowBundle\EventListener\PreviousStepInvalidEventListener instance
     */
    protected function getCraue_Form_Flow_EventListener_PreviousStepInvalidService()
    {
        $this->services['craue.form.flow.event_listener.previous_step_invalid'] = $instance = new \Craue\FormFlowBundle\EventListener\PreviousStepInvalidEventListener();

        $instance->setTranslator($this->get('translator'));

        return $instance;
    }

    /**
     * Gets the 'craue.form.flow.form_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Form\Extension\FormFlowFormExtension A Craue\FormFlowBundle\Form\Extension\FormFlowFormExtension instance
     */
    protected function getCraue_Form_Flow_FormExtensionService()
    {
        return $this->services['craue.form.flow.form_extension'] = new \Craue\FormFlowBundle\Form\Extension\FormFlowFormExtension();
    }

    /**
     * Gets the 'craue.form.flow.hidden_field_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Form\Extension\FormFlowHiddenFieldExtension A Craue\FormFlowBundle\Form\Extension\FormFlowHiddenFieldExtension instance
     */
    protected function getCraue_Form_Flow_HiddenFieldExtensionService()
    {
        return $this->services['craue.form.flow.hidden_field_extension'] = new \Craue\FormFlowBundle\Form\Extension\FormFlowHiddenFieldExtension();
    }

    /**
     * Gets the 'craue.form.flow.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Storage\SessionStorage A Craue\FormFlowBundle\Storage\SessionStorage instance
     */
    protected function getCraue_Form_Flow_StorageService()
    {
        return $this->services['craue.form.flow.storage'] = new \Craue\FormFlowBundle\Storage\SessionStorage($this->get('session'));
    }

    /**
     * Gets the 'craue_formflow_util' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Util\FormFlowUtil A Craue\FormFlowBundle\Util\FormFlowUtil instance
     */
    protected function getCraueFormflowUtilService()
    {
        return $this->services['craue_formflow_util'] = new \Craue\FormFlowBundle\Util\FormFlowUtil();
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), 28586, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('flow.previous_step_invalid', array(0 => 'craue.form.flow.event_listener.previous_step_invalid', 1 => 'onPreviousStepInvalid'), 0);
        $instance->addListenerService('flow.flow_expired', array(0 => 'craue.form.flow.event_listener.flow_expired', 1 => 'onFlowExpired'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'kernel.listener.bigfoot_controller_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('@request_stack', array(0 => 'bigfoot_core.kernel_listener', 1 => 'onEarlyKernelRequest'), 40);
        $instance->addListenerService('@request_stack', array(0 => 'bigfoot_core.kernel_listener', 1 => 'onLateKernelRequest'), -500);
        $instance->addListenerService('@request_stack', array(0 => 'bigfoot_user.listener.kernel', 1 => 'onKernelRequest'), 5);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.blame', 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener');
        $instance->addSubscriberService('pagerfanta.convert_not_valid_max_per_page_to_not_found_listener', 'WhiteOctober\\PagerfantaBundle\\EventListener\\ConvertNotValidMaxPerPageToNotFoundListener');
        $instance->addSubscriberService('pagerfanta.convert_not_valid_current_page_to_not_found_listener', 'WhiteOctober\\PagerfantaBundle\\EventListener\\ConvertNotValidCurrentPageToNotFoundListener');
        $instance->addSubscriberService('bigfoot_core.subscriber.menu', 'Bigfoot\\Bundle\\CoreBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('bigfoot_context.subscriber.menu', 'Bigfoot\\Bundle\\ContextBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('bigfoot_context.subscriber.form', 'Bigfoot\\Bundle\\ContextBundle\\Subscriber\\FormSubscriber');
        $instance->addSubscriberService('bigfoot_navigation.subscriber.menu', 'Bigfoot\\Bundle\\NavigationBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('bigfoot_user.subscriber.menu', 'Bigfoot\\Bundle\\UserBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('bigfoot_user.subscriber.settings', 'Bigfoot\\Bundle\\UserBundle\\Subscriber\\SettingsSubscriber');
        $instance->addSubscriberService('bigfoot_user.subscriber.user', 'Bigfoot\\Bundle\\UserBundle\\Subscriber\\UserSubscriber');
        $instance->addSubscriberService('bigfoot_content.subscriber.menu', 'Bigfoot\\Bundle\\ContentBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('bigfoot_media.subscriber.menu', 'Bigfoot\\Bundle\\MediaBundle\\Subscriber\\MenuSubscriber');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Sortable\SortableListener();
        $e->setAnnotationReader($a);

        $f = new \Gedmo\Sluggable\SluggableListener();
        $f->setAnnotationReader($a);

        $g = new \Gedmo\Timestampable\TimestampableListener();
        $g->setAnnotationReader($a);

        $h = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $h->addEventSubscriber($d);
        $h->addEventSubscriber($this->get('bigfoot_context.subscriber.doctrine'));
        $h->addEventSubscriber($e);
        $h->addEventSubscriber($f);
        $h->addEventSubscriber($this->get('stof_doctrine_extensions.listener.blameable'));
        $h->addEventSubscriber($g);
        $h->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));
        $h->addEventListener(array(0 => 'onFlush', 1 => 'postPersist', 2 => 'postUpdate', 3 => 'postRemove'), $this->get('bigfoot_core.doctrine_listener'));
        $h->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_sqlite', 'host' => NULL, 'port' => NULL, 'dbname' => NULL, 'user' => NULL, 'password' => NULL, 'charset' => 'UTF8', 'path' => ($this->targetDirs[3].'/app/database/sf3_database.sqlite'), 'driverOptions' => array(), 'defaultTableOptions' => array()), $c, $h, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity'), 1 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translator/Entity'), 2 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Loggable/Entity'), 3 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity'), 4 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Entity'), 5 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-context-bundle/Bigfoot/Bundle/ContextBundle/Entity'), 6 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-navigation-bundle/Bigfoot/Bundle/NavigationBundle/Entity'), 7 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Entity'), 8 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-content-bundle/Bigfoot/Bundle/ContentBundle/Entity'), 9 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Gedmo\\Translatable\\Entity');
        $c->addDriver($b, 'Gedmo\\Translator\\Entity');
        $c->addDriver($b, 'Gedmo\\Loggable\\Entity');
        $c->addDriver($b, 'Gedmo\\Tree\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\CoreBundle\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\ContextBundle\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\NavigationBundle\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\UserBundle\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\ContentBundle\\Entity');
        $c->addDriver($b, 'Bigfoot\\Bundle\\MediaBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('GedmoTranslatable' => 'Gedmo\\Translatable\\Entity', 'GedmoTranslator' => 'Gedmo\\Translator\\Entity', 'GedmoLoggable' => 'Gedmo\\Loggable\\Entity', 'GedmoTree' => 'Gedmo\\Tree\\Entity', 'BigfootCoreBundle' => 'Bigfoot\\Bundle\\CoreBundle\\Entity', 'BigfootContextBundle' => 'Bigfoot\\Bundle\\ContextBundle\\Entity', 'BigfootNavigationBundle' => 'Bigfoot\\Bundle\\NavigationBundle\\Entity', 'BigfootUserBundle' => 'Bigfoot\\Bundle\\UserBundle\\Entity', 'BigfootContentBundle' => 'Bigfoot\\Bundle\\ContentBundle\\Entity', 'BigfootMediaBundle' => 'Bigfoot\\Bundle\\MediaBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $d->addCustomStringFunction('regexp', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Doctrine\\Query\\MySQL\\Regexp');
        $d->addCustomStringFunction('substring_index', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Doctrine\\Query\\MySQL\\SubstringIndex');
        $d->addCustomStringFunction('greatest', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Doctrine\\Query\\MySQL\\Greatest');
        $d->addCustomNumericFunction('acos', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Acos');
        $d->addCustomNumericFunction('cos', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Cos');
        $d->addCustomNumericFunction('sin', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Sin');
        $d->addCustomNumericFunction('radians', 'Bigfoot\\Bundle\\CoreBundle\\ORM\\Radians');
        $d->addCustomNumericFunction('GEO_DISTANCE', 'Craue\\GeoBundle\\Doctrine\\Query\\Mysql\\GeoDistance');
        $d->addCustomNumericFunction('GEO_DISTANCE_BY_POSTAL_CODE', 'Craue\\GeoBundle\\Doctrine\\Query\\Mysql\\GeoDistanceByPostalCode');
        $d->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(0 => 'softdeleteable'), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_ef9518932e697f263527614c43f5272ca55e813d520539ea0ad2dd5dec35cc26');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_ef9518932e697f263527614c43f5272ca55e813d520539ea0ad2dd5dec35cc26');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_ef9518932e697f263527614c43f5272ca55e813d520539ea0ad2dd5dec35cc26');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'Liip\\ImagineBundle\\Form\\Type\\ImageType' => 'liip_imagine.form.type.image', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\BigfootTagType' => 'bigfoot.form.type.bigfoot_tag', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\TranslatedEntityType' => 'form.type.translatable', 'Bigfoot\\Bundle\\CoreBundle\\Form\\TranslatableLabelType' => 'form.type.translatable_label', 'Bigfoot\\Bundle\\CoreBundle\\Form\\TranslatableLabelTranslationType' => 'form.type.translatable_label_translation', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\SortableEntityType' => 'form.type.sortable', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\BigfootRichtextType' => 'form.type.bigfoot_richtext', 'Bigfoot\\Bundle\\CoreBundle\\Form\\RouteType' => 'form.type.bigfoot_route', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\BigfootDatepickerType' => 'bigfoot.form.datepicker.type', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\CollectionItemType' => 'bigfoot.form.type.collection_item', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\SortableCollectionType' => 'bigfoot.form.type.sortable_collection', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\FileType' => 'bigfoot.form.type.file', 'Bigfoot\\Bundle\\CoreBundle\\Form\\QuickLinkType' => 'bigfoot.form.type.quicklink', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\FilterType' => 'bigfoot_core.form.type.filters', 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\SettingsType' => 'bigfoot_core.form.type.settings', 'Bigfoot\\Bundle\\ContextBundle\\Form\\Type\\ContextType' => 'bigfoot_context.form.type.context', 'Bigfoot\\Bundle\\NavigationBundle\\Form\\Type\\LinkType' => 'bigfoot_navigation.form.type.link', 'Bigfoot\\Bundle\\NavigationBundle\\Form\\Type\\MenuType' => 'bigfoot_navigation.form.type.menu', 'Bigfoot\\Bundle\\NavigationBundle\\Form\\Type\\Menu\\ItemType' => 'bigfoot_navigation.form.type.menu_item', 'Bigfoot\\Bundle\\NavigationBundle\\Form\\Type\\Menu\\Item\\AttributeType' => 'bigfoot_navigation.form.type.menu_item_attribute', 'Bigfoot\\Bundle\\NavigationBundle\\Form\\Type\\Route\\ParameterType' => 'bigfoot_navigation.form.type.route_parameter', 'Bigfoot\\Bundle\\UserBundle\\Form\\BigfootRoleMenuType' => 'form.type.role_menu', 'Bigfoot\\Bundle\\UserBundle\\Form\\Type\\UserType' => 'bigfoot_user.form.type.user', 'Bigfoot\\Bundle\\UserBundle\\Form\\Type\\ForgotPasswordType' => 'bigfoot_user.form.type.forgot_password', 'Bigfoot\\Bundle\\UserBundle\\Form\\Type\\ResetPasswordType' => 'bigfoot_user.form.type.reset_password', 'Bigfoot\\Bundle\\UserBundle\\Form\\Type\\RoleType' => 'bigfoot_user.form.type.role', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\ContentType' => 'bigfoot_content.form.type.content', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\TemplateType' => 'bigfoot_content.form.type.template', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\SidebarType' => 'bigfoot_content.form.type.page_sidebar', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\BlockType' => 'bigfoot_content.form.type.page_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\BlockType' => 'bigfoot_content.form.type.sidebar_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescType' => 'bigfoot_content.form.type.page_template_title_desc', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescMediaType' => 'bigfoot_content.form.type.page_template_title_desc_media', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescBlockType' => 'bigfoot_content.form.type.page_template_title_desc_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescMediaBlockType' => 'bigfoot_content.form.type.page_template_title_desc_media_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescSidebarType' => 'bigfoot_content.form.type.page_template_title_desc_sidebar', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescBlockSidebarType' => 'bigfoot_content.form.type.page_template_title_desc_block_sidebar', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescMediaBlockSidebarType' => 'bigfoot_content.form.type.page_template_title_desc_media_block_sidebar', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Page\\Template\\TitleDescMediaSidebarType' => 'bigfoot_content.form.type.page_template_title_desc_media_sidebar', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\BlockType' => 'bigfoot_content.form.type.sidebar_template_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\MediaBlockType' => 'bigfoot_content.form.type.sidebar_template_media_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\TitleBlockType' => 'bigfoot_content.form.type.sidebar_template_title_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\TitleMediaBlockType' => 'bigfoot_content.form.type.sidebar_template_title_media_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\TitleDescBlockType' => 'bigfoot_content.form.type.sidebar_template_title_desc_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Sidebar\\Template\\TitleDescMediaBlockType' => 'bigfoot_content.form.type.sidebar_template_title_desc_media_block', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Block\\Template\\TitleDescMediaType' => 'bigfoot_content.form.type.block_template_title_desc_media', 'Bigfoot\\Bundle\\ContentBundle\\Form\\Type\\Block\\Template\\TitleDescType' => 'bigfoot_content.form.type.block_template_title_desc', 'Bigfoot\\Bundle\\MediaBundle\\Form\\PortfolioSearchType' => 'form.type.portfolio_search', 'Bigfoot\\Bundle\\MediaBundle\\Form\\MediaType' => 'bigfoot.form.type.bigfoot_media_mediatype', 'Bigfoot\\Bundle\\MediaBundle\\Form\\Type\\BigfootMediaType' => 'bigfoot.form.type.bigfoot_media'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector', 5 => 'craue.form.flow.form_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => array(0 => 'craue.form.flow.hidden_field_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EntityType' => array(0 => 'bigfoot_context.form.extension.context')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.bigfoot_richtext' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootRichtextType A Bigfoot\Bundle\CoreBundle\Form\Type\BigfootRichtextType instance
     */
    protected function getForm_Type_BigfootRichtextService()
    {
        return $this->services['form.type.bigfoot_richtext'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\BigfootRichtextType();
    }

    /**
     * Gets the 'form.type.bigfoot_route' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\RouteType A Bigfoot\Bundle\CoreBundle\Form\RouteType instance
     */
    protected function getForm_Type_BigfootRouteService()
    {
        return $this->services['form.type.bigfoot_route'] = new \Bigfoot\Bundle\CoreBundle\Form\RouteType();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.portfolio_search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\MediaBundle\Form\PortfolioSearchType A Bigfoot\Bundle\MediaBundle\Form\PortfolioSearchType instance
     */
    protected function getForm_Type_PortfolioSearchService()
    {
        return $this->services['form.type.portfolio_search'] = new \Bigfoot\Bundle\MediaBundle\Form\PortfolioSearchType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.role_menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\UserBundle\Form\BigfootRoleMenuType A Bigfoot\Bundle\UserBundle\Form\BigfootRoleMenuType instance
     */
    protected function getForm_Type_RoleMenuService()
    {
        return $this->services['form.type.role_menu'] = new \Bigfoot\Bundle\UserBundle\Form\BigfootRoleMenuType($this);
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\SortableEntityType A Bigfoot\Bundle\CoreBundle\Form\Type\SortableEntityType instance
     */
    protected function getForm_Type_SortableService()
    {
        return $this->services['form.type.sortable'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\SortableEntityType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.translatable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\Type\TranslatedEntityType A Bigfoot\Bundle\CoreBundle\Form\Type\TranslatedEntityType instance
     */
    protected function getForm_Type_TranslatableService()
    {
        return $this->services['form.type.translatable'] = new \Bigfoot\Bundle\CoreBundle\Form\Type\TranslatedEntityType($this->get('bigfoot_core.translatable_subscriber'), $this->get('request_stack'), array('fr' => array('label' => 'French', 'value' => 'fr', 'parameters' => array('default_country' => 'FR', 'fullLocale' => 'fr_FR', 'domain' => 'http://127.0.0.1:7080/')), 'en' => array('label' => 'English', 'value' => 'en', 'parameters' => array('default_country' => 'GB', 'fullLocale' => 'en_GB', 'domain' => 'http://127.0.0.1:7080/en/'))));
    }

    /**
     * Gets the 'form.type.translatable_label' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelType A Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelType instance
     */
    protected function getForm_Type_TranslatableLabelService()
    {
        return $this->services['form.type.translatable_label'] = new \Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelType($this->get('bigfoot_context.service.context'), $this->get('doctrine.orm.default_entity_manager'), 'en', $this->get('bigfoot_core.manager.translatable_label'), $this->get('translator'));
    }

    /**
     * Gets the 'form.type.translatable_label_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelTranslationType A Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelTranslationType instance
     */
    protected function getForm_Type_TranslatableLabelTranslationService()
    {
        return $this->services['form.type.translatable_label_translation'] = new \Bigfoot\Bundle\CoreBundle\Form\TranslatableLabelTranslationType($this->get('bigfoot_context.service.context'), $this->get('doctrine.orm.default_entity_manager'), 'en', $this->get('bigfoot_core.manager.translatable_label'), $this->get('translator'));
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), true);
    }

    /**
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('be_simple_i18n_routing.router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle', 'BeSimpleI18nRoutingBundle' => 'BeSimple\\I18nRoutingBundle\\BeSimpleI18nRoutingBundle', 'CraueFormFlowBundle' => 'Craue\\FormFlowBundle\\CraueFormFlowBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'JMSTwigJsBundle' => 'JMS\\TwigJsBundle\\JMSTwigJsBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle', 'BigfootCoreBundle' => 'Bigfoot\\Bundle\\CoreBundle\\BigfootCoreBundle', 'BigfootContextBundle' => 'Bigfoot\\Bundle\\ContextBundle\\BigfootContextBundle', 'BigfootNavigationBundle' => 'Bigfoot\\Bundle\\NavigationBundle\\BigfootNavigationBundle', 'BigfootUserBundle' => 'Bigfoot\\Bundle\\UserBundle\\BigfootUserBundle', 'BigfootContentBundle' => 'Bigfoot\\Bundle\\ContentBundle\\BigfootContentBundle', 'BigfootDefaultThemeBundle' => 'Bigfoot\\Theme\\DefaultThemeBundle\\BigfootDefaultThemeBundle', 'BigfootMediaBundle' => 'Bigfoot\\Bundle\\MediaBundle\\BigfootMediaBundle', 'AppBundle' => 'AppBundle\\AppBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle'));
    }

    /**
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RouteCollectionNormalizer(), 1 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RoutesResponseNormalizer(), 2 => new \FOS\JsRoutingBundle\Serializer\Denormalizer\RouteCollectionDenormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('debug.event_dispatcher'), $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Serializer A JMS\Serializer\Serializer instance
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b);
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Europe/Berlin', true);
    }

    /**
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler A JMS\Serializer\Handler\FormErrorHandler instance
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator'));
    }

    /**
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')))));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver A JMS\Serializer\Metadata\Driver\DoctrineTypeDriver instance
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\FixturesBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Resources/config/serializer'), 'Knp\\Bundle\\PaginatorBundle' => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/config/serializer'), 'Bazinga\\Bundle\\JsTranslationBundle' => ($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/config/serializer'), 'BeSimple\\I18nRoutingBundle' => ($this->targetDirs[3].'/vendor/besimple/i18n-routing-bundle/BeSimple/I18nRoutingBundle/Resources/config/serializer'), 'Craue\\FormFlowBundle' => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/config/serializer'), 'FOS\\JsRoutingBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Resources/config/serializer'), 'JMS\\TwigJsBundle' => ($this->targetDirs[3].'/vendor/jms/twig-js-bundle/JMS/TwigJsBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'JMS\\TranslationBundle' => ($this->targetDirs[3].'/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/config/serializer'), 'Liip\\ImagineBundle' => ($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Resources/config/serializer'), 'WhiteOctober\\PagerfantaBundle' => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\CoreBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\ContextBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-context-bundle/Bigfoot/Bundle/ContextBundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\NavigationBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-navigation-bundle/Bigfoot/Bundle/NavigationBundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\UserBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\ContentBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-content-bundle/Bigfoot/Bundle/ContentBundle/Resources/config/serializer'), 'Bigfoot\\Theme\\DefaultThemeBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/config/serializer'), 'Bigfoot\\Bundle\\MediaBundle' => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/config/serializer'), 'AppBundle' => ($this->targetDirs[3].'/src/AppBundle/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/config/serializer')));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor A JMS\Serializer\Construction\DoctrineObjectConstructor instance
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.stopwatch_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber A JMS\SerializerBundle\Serializer\StopwatchEventSubscriber instance
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_translation.config_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\ConfigFactory A JMS\TranslationBundle\Translation\ConfigFactory instance
     */
    protected function getJmsTranslation_ConfigFactoryService()
    {
        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array());
    }

    /**
     * Gets the 'jms_translation.file_source_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\FileSourceFactory A JMS\TranslationBundle\Translation\FileSourceFactory instance
     */
    protected function getJmsTranslation_FileSourceFactoryService()
    {
        return $this->services['jms_translation.file_source_factory'] = new \JMS\TranslationBundle\Translation\FileSourceFactory(($this->targetDirs[3].'/app'));
    }

    /**
     * Gets the 'jms_translation.loader_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\LoaderManager A JMS\TranslationBundle\Translation\LoaderManager instance
     */
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'json' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.json')), 'db' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('bigfoot.translation.database_loader')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader()));
    }

    /**
     * Gets the 'jms_translation.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Twig\TranslationExtension A JMS\TranslationBundle\Twig\TranslationExtension instance
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator'), true);
    }

    /**
     * Gets the 'jms_translation.updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\Updater A JMS\TranslationBundle\Translation\Updater instance
     */
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('jms_translation.file_source_factory');
        $c = $this->get('twig');

        $d = new \Doctrine\Common\Annotations\DocParser();
        $d->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $d->setIgnoreNotImportedAnnotations(true);

        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');

        $f = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $f->setSourceLanguage('en');

        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($c, $a, array(0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($d, $b), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($d, $b), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($c, $b), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator')), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($d, $b))), $a, array()), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $e, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'json' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.json'), 'json'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $f)));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'kernel.listener.bigfoot_controller_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Bigfoot\Bundle\CoreBundle\Listener\ControllerListener A Bigfoot\Bundle\CoreBundle\Listener\ControllerListener instance
     */
    protected function getKernel_Listener_BigfootControllerListenerService()
    {
        return $this->services['kernel.listener.bigfoot_controller_listener'] = new \Bigfoot\Bundle\CoreBundle\Listener\ControllerListener($this->get('bigfoot.theme'));
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('be_simple_i18n_routing.router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('main' => 'bigfoot_core.menu.main', 'test' => 'bigfoot_core.menu.test')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array()), 2 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'knp_paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Paginator A Knp\Component\Pager\Paginator instance
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('debug.event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the 'knp_paginator.helper.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor A Knp\Bundle\PaginatorBundle\Helper\Processor instance
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('be_simple_i18n_routing.router'), $this->get('translator'));
    }

    /**
     * Gets the 'knp_paginator.subscriber.filtration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber A Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.paginate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber A Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the 'knp_paginator.subscriber.sliding_pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber A Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the 'knp_paginator.subscriber.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber A Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the 'knp_paginator.twig.extension.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension A Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension instance
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /**
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gd\Imagine A Imagine\Gd\Imagine instance
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.binary.loader.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), ($this->targetDirs[3].'/app/../web'));
    }

    /**
     * Gets the 'liip_imagine.binary.loader.prototype.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), '');
    }

    /**
     * Gets the 'liip_imagine.binary.loader.prototype.stream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader A Liip\ImagineBundle\Binary\Loader\StreamLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /**
     * Gets the 'liip_imagine.binary.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser A Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser instance
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser($this->get('liip_imagine.mime_type_guesser'));
    }

    /**
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('be_simple_i18n_routing.router'), $this->get('liip_imagine.cache.signer'), $this->get('debug.event_dispatcher'), false);

        $instance->addResolver('default', $this->get('liip_imagine.cache.resolver.default'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache_web_path'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'), $this->get('router.request_context'), ($this->targetDirs[3].'/app/../web'), 'media/cache');
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.no_cache_web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver($this->get('router.request_context'));
    }

    /**
     * Gets the 'liip_imagine.cache.signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer A Liip\ImagineBundle\Imagine\Cache\Signer instance
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'), $this->get('liip_imagine.cache.signer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.binary.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), $this->get('liip_imagine.filter.configuration'), 'default', NULL);

        $instance->addLoader('default', $this->get('liip_imagine.binary.loader.default'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.extension_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface instance
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /**
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('listing_site_1' => array('quality' => 90, 'filters' => array('thumbnail' => array('size' => array(0 => 300, 1 => 300), 'mode' => 'inset')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'media_thumbnail' => array('quality' => 90, 'filters' => array('thumbnail' => array('size' => array(0 => 100, 1 => 100), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'media_single' => array('quality' => 90, 'filters' => array('thumbnail' => array('size' => array(0 => 300, 1 => 200), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'media_gallery' => array('quality' => 90, 'filters' => array('thumbnail' => array('size' => array(0 => 500, 1 => 250), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.auto_rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.downscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.grayscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.interlace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), ($this->targetDirs[3].'/app'));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), ($this->targetDirs[3].'/app'));
    }

    /**
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'), $this->get('liip_imagine'), $this->get('liip_imagine.binary.mime_type_guesser'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('grayscale', $this->get('liip_imagine.filter.loader.grayscale'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('downscale', $this->get('liip_imagine.filter.loader.downscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));
        $instance->addLoader('rotate', $this->get('liip_imagine.filter.loader.rotate'));
        $instance->addLoader('interlace', $this->get('liip_imagine.filter.loader.interlace'));
        $instance->addPostProcessor('jpegoptim', $this->get('liip_imagine.filter.post_processor.jpegoptim'));
        $instance->addPostProcessor('optipng', $this->get('liip_imagine.filter.post_processor.optipng'));
        $instance->addPostProcessor('pngquant', $this->get('liip_imagine.filter.post_processor.pngquant'));
        $instance->addPostProcessor('mozjpeg', $this->get('liip_imagine.filter.post_processor.mozjpeg'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.jpegoptim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true);
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.mozjpeg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_MozjpegService()
    {
        return $this->services['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.optipng' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true);
    }

    /**
     * Gets the 'liip_imagine.filter.post_processor.pngquant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_PngquantService()
    {
        return $this->services['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant');
    }

    /**
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the 'liip_imagine.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface instance
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /**
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array());
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener instance
     */
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener instance
     */
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy'), $this->get('security.logout_url_generator')));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('be_simple_i18n_routing.router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \BeSimple\I18nRoutingBundle\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \BeSimple\I18nRoutingBundle\Routing\Loader\YamlFileLoader($a));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Bigfoot\\Bundle\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 1000, 3 => 40))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login_admin_firewall' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), 'security.firewall.map.context.back_office' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), 'security.firewall.map.context.main' => NULL)), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.back_office' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_BackOfficeService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('security.user.provider.concrete.bigfoot');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.http_utils');
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b), 'ThisTokenIsNotSoSecretChangeIt', 'back_office', array('lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $c);

        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $e, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($e, '/admin/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout'));
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $i->addHandler($h);

        $j = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');

        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($e, array());
        $k->setOptions(array('login_path' => '/admin/login', 'always_use_default_target_path' => true, 'default_target_path' => '/admin/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $k->setProviderKey('back_office');

        $l = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array(), $c);
        $l->setOptions(array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $m = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $g, $j, $e, 'back_office', $k, $l, array('check_path' => '/admin/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $c, $d, NULL);
        $m->setRememberMeServices($h);

        return $this->services['security.firewall.map.context.back_office'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $b, 1 => $this->get('security.user.provider.concrete.in_memory')), 'back_office', $c, $d), 2 => $i, 3 => $m, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($a, $h, $g, $c, $d, true, $j), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '57d087b26ebd46.63569744', $c, $g), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $e, 'back_office', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, '/admin/login', false), NULL, NULL, $c, false));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.login_admin_firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_LoginAdminFirewallService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.firewall.map.context.login_admin_firewall'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.bigfoot'), 1 => $this->get('security.user.provider.concrete.in_memory')), 'login_admin_firewall', $b, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '57d087b26ebd46.63569744', $b, $this->get('security.authentication.manager')), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'login_admin_firewall', NULL, NULL, NULL, $b, false));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.bigfoot'), 1 => $this->get('security.user.provider.concrete.in_memory')), 'main', $b, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '57d087b26ebd46.63569744', $b, $this->get('security.authentication.manager')), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'main', NULL, NULL, NULL, $b, false));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.user_checker.login_admin_firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_LoginAdminFirewallService()
    {
        return $this->services['security.user_checker.login_admin_firewall'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.blame' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\BlameListener A Stof\DoctrineExtensionsBundle\EventListener\BlameListener instance
     */
    protected function getStofDoctrineExtensions_EventListener_BlameService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.blame'] = new \Stof\DoctrineExtensionsBundle\EventListener\BlameListener($this->get('stof_doctrine_extensions.listener.blameable'), $this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener A Stof\DoctrineExtensionsBundle\EventListener\LocaleListener instance
     */
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        $instance->addLoader('db', $this->get('bigfoot.translation.database_loader'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader A JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'bigfoot.translation.database_loader' => array(0 => 'db')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/translations/messages.fr.yml'), 7 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/translations/messages.fr.yml'), 8 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/translations/messages.fr.yml'), 9 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/translations/messages.fr.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.de.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.de.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.es.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.es.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.zh_CN.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.pt_BR.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lt.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.bg.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.en.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/translations/messages.en.yml'), 7 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/translations/messages.en.yml'), 8 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/translations/messages.en.yml'), 9 => ($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/translations/messages.en.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.ru.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.cs.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ja.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.uk.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.zh_TW.yml'), 2 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.zh_TW.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.vi.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.sk.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/validators.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/translations/CraueFormFlowBundle.fa.yml'), 5 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');

        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('dev');
        $c->setDebug(true);
        if ($this->has('security.token_storage')) {
            $c->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('be_simple_i18n_routing.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'LiipImagineBundle:Form:form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'AsseticBundle', 6 => 'SensioFrameworkExtraBundle', 7 => 'DoctrineBundle', 8 => 'DoctrineFixturesBundle', 9 => 'KnpPaginatorBundle', 10 => 'KnpMenuBundle', 11 => 'BazingaJsTranslationBundle', 12 => 'BeSimpleI18nRoutingBundle', 13 => 'CraueFormFlowBundle', 14 => 'FOSJsRoutingBundle', 15 => 'JMSTwigJsBundle', 16 => 'JMSSerializerBundle', 17 => 'JMSTranslationBundle', 18 => 'LiipImagineBundle', 19 => 'StofDoctrineExtensionsBundle', 20 => 'WhiteOctoberPagerfantaBundle', 21 => 'BigfootCoreBundle', 22 => 'BigfootContextBundle', 23 => 'BigfootNavigationBundle', 24 => 'BigfootUserBundle', 25 => 'BigfootContentBundle', 26 => 'BigfootDefaultThemeBundle', 27 => 'BigfootMediaBundle', 28 => 'AppBundle', 29 => 'DebugBundle', 30 => 'WebProfilerBundle', 31 => 'SensioDistributionBundle', 32 => 'SensioGeneratorBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension($this->get('knp_menu.helper'), $this->get('knp_menu.matcher'), $this->get('knp_menu.manipulator')));
        $instance->addExtension($this->get('twig.extension.craue_formflow'));
        $instance->addExtension(new \TwigJs\Twig\TwigJsExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension($this->get('bigfoot_core.twig.locale_flags_extension'));
        $instance->addExtension($this->get('bigfoot_core.twig.formatter_extension'));
        $instance->addExtension($this->get('bigfoot_core.twig.file_extension'));
        $instance->addExtension($this->get('bigfoot_context.twig.extension.context'));
        $instance->addExtension($this->get('bigfoot_navigation.twig.extension.menu'));
        $instance->addExtension($this->get('bigfoot_navigation.twig.extension.link'));
        $instance->addExtension($this->get('bigfoot_content.twig.extension.content'));
        $instance->addExtension($this->get('bigfoot.twig.medias_extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $c);
        $instance->addGlobal('bigfoot_media_cache', true);
        $instance->addGlobal('bigfoot_version', '4.0');
        $instance->addGlobal('defaultLocale', 'en');
        $instance->addGlobal('locales', array(0 => 'fr', 1 => 'en'));
        $instance->addGlobal('bigfoot_theme', array('title' => 'Sf3 + bigfoot', 'subtitle' => 'Administration interface'));
        $instance->addGlobal('bigfoot_theme_bundle', 'BigfootDefaultThemeBundle');
        $instance->addGlobal('bigfoot_context', $this->get('bigfoot_context.service.context'));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.craue_formflow' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Craue\FormFlowBundle\Twig\Extension\FormFlowExtension A Craue\FormFlowBundle\Twig\Extension\FormFlowExtension instance
     */
    protected function getTwig_Extension_CraueFormflowService()
    {
        $this->services['twig.extension.craue_formflow'] = $instance = new \Craue\FormFlowBundle\Twig\Extension\FormFlowExtension();

        $instance->setFormFlowUtil($this->get('craue_formflow_util'));

        return $instance;
    }

    /**
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /**
     * Gets the 'twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance
     */
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[3].'/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), 'BazingaJsTranslation');
        $instance->addPath(($this->targetDirs[3].'/vendor/craue/formflow-bundle/Resources/views'), 'CraueFormFlow');
        $instance->addPath(($this->targetDirs[3].'/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views'), 'JMSTranslation');
        $instance->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-core-bundle/Bigfoot/Bundle/CoreBundle/Resources/views'), 'BigfootCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-navigation-bundle/Bigfoot/Bundle/NavigationBundle/Resources/views'), 'BigfootNavigation');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-user-bundle/Bigfoot/Bundle/UserBundle/Resources/views'), 'BigfootUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-content-bundle/Bigfoot/Bundle/ContentBundle/Resources/views'), 'BigfootContent');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-default-theme/Bigfoot/Theme/DefaultThemeBundle/Resources/views'), 'BigfootDefaultTheme');
        $instance->addPath(($this->targetDirs[3].'/vendor/7rin0/bigfoot-media-bundle/Bigfoot/Bundle/MediaBundle/Resources/views'), 'BigfootMedia');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'twig_js.assetic_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TwigJs\Assetic\TwigJsFilter A TwigJs\Assetic\TwigJsFilter instance
     */
    protected function getTwigJs_AsseticFilterService()
    {
        return $this->services['twig_js.assetic_filter'] = new \TwigJs\Assetic\TwigJsFilter($this->get('twig_js.compile_request_handler'));
    }

    /**
     * Gets the 'twig_js.compile_request_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TwigJs\CompileRequestHandler A TwigJs\CompileRequestHandler instance
     */
    protected function getTwigJs_CompileRequestHandlerService()
    {
        $a = $this->get('twig');

        $b = new \TwigJs\JsCompiler($a);
        $b->addFilterCompiler(new \JMS\TwigJsBundle\TwigJs\Compiler\TransFilterCompiler($this->get('translator')));

        return $this->services['twig_js.compile_request_handler'] = new \TwigJs\CompileRequestHandler($a, $b);
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator');

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));

        return $instance;
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[3].'/app/../web'), true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'knp_menu.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Knp\Menu\Twig\Helper A Knp\Menu\Twig\Helper instance
     */
    protected function getKnpMenu_HelperService()
    {
        return $this->services['knp_menu.helper'] = new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'), $this->get('knp_menu.manipulator'));
    }

    /**
     * Gets the 'knp_menu.manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Knp\Menu\Util\MenuManipulator A Knp\Menu\Util\MenuManipulator instance
     */
    protected function getKnpMenu_ManipulatorService()
    {
        return $this->services['knp_menu.manipulator'] = new \Knp\Menu\Util\MenuManipulator();
    }

    /**
     * Gets the 'router.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouter_DefaultService()
    {
        $this->services['router.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => $this->get('bigfoot_context.voter.context'), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)));

        return $instance;
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.token_storage'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/forgot-password'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/reset-password'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'IS_AUTHENTICATED_FULLY', 1 => 'IS_AUTHENTICATED_REMEMBERED'), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker.login_admin_firewall');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('57d087b26ebd46.63569744'), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.bigfoot'), $a, 'back_office', $this->get('security.encoder_factory'), true), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($a, 'ThisTokenIsNotSoSecretChangeIt', 'back_office'), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('57d087b26ebd46.63569744'), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('57d087b26ebd46.63569744')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('be_simple_i18n_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('back_office', '/admin/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the 'security.user.provider.concrete.bigfoot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider A Symfony\Bridge\Doctrine\Security\User\EntityUserProvider instance
     */
    protected function getSecurity_User_Provider_Concrete_BigfootService()
    {
        return $this->services['security.user.provider.concrete.bigfoot'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'BigfootUserBundle:User', NULL, NULL);
    }

    /**
     * Gets the 'security.user.provider.concrete.in_memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider A Symfony\Component\Security\Core\User\InMemoryUserProvider instance
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        return $this->services['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.blameable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Gedmo\Blameable\BlameableListener A Gedmo\Blameable\BlameableListener instance
     */
    protected function getStofDoctrineExtensions_Listener_BlameableService()
    {
        $this->services['stof_doctrine_extensions.listener.blameable'] = $instance = new \Gedmo\Blameable\BlameableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));

        return $instance;
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.translatable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Gedmo\Translatable\TranslatableListener A Gedmo\Translatable\TranslatableListener instance
     */
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('en');
        $instance->setTranslatableLocale('en');
        $instance->setTranslationFallback(false);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[3].'/app'),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'BeSimpleI18nRoutingBundle' => 'BeSimple\\I18nRoutingBundle\\BeSimpleI18nRoutingBundle',
                'CraueFormFlowBundle' => 'Craue\\FormFlowBundle\\CraueFormFlowBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'JMSTwigJsBundle' => 'JMS\\TwigJsBundle\\JMSTwigJsBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'BigfootCoreBundle' => 'Bigfoot\\Bundle\\CoreBundle\\BigfootCoreBundle',
                'BigfootContextBundle' => 'Bigfoot\\Bundle\\ContextBundle\\BigfootContextBundle',
                'BigfootNavigationBundle' => 'Bigfoot\\Bundle\\NavigationBundle\\BigfootNavigationBundle',
                'BigfootUserBundle' => 'Bigfoot\\Bundle\\UserBundle\\BigfootUserBundle',
                'BigfootContentBundle' => 'Bigfoot\\Bundle\\ContentBundle\\BigfootContentBundle',
                'BigfootDefaultThemeBundle' => 'Bigfoot\\Theme\\DefaultThemeBundle\\BigfootDefaultThemeBundle',
                'BigfootMediaBundle' => 'Bigfoot\\Bundle\\MediaBundle\\BigfootMediaBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_sqlite',
            'database_host' => NULL,
            'database_port' => NULL,
            'database_name' => NULL,
            'database_user' => NULL,
            'database_password' => NULL,
            'database_path' => ($this->targetDirs[3].'/app/database/sf3_database.sqlite'),
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'locale' => 'en',
            'bigfoot.theme.values' => array(
                'logo' => NULL,
                'title' => 'SF3 + Bigfoot',
                'subtitle' => 'Bigfoot administration interface',
            ),
            'bigfoot.theme.bundle' => 'BigfootDefaultThemeBundle',
            'bigfoot.core.upload_dir' => 'uploads/',
            'bigfoot.media.portfolio_dir' => 'portfolio/',
            'bigfoot_migrate' => array(
                0 => 'Bigfoot\\Bundle\\UserBundle\\Entity\\Role',
                1 => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page',
                2 => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Attribute',
                3 => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Block',
                4 => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Sidebar',
                5 => 'Bigfoot\\Bundle\\CoreBundle\\Entity\\Tag',
                6 => 'Bigfoot\\Bundle\\CoreBundle\\Entity\\TagCategory',
                7 => 'Bigfoot\\Bundle\\CoreBundle\\Entity\\Widget',
                8 => 'Bigfoot\\Bundle\\NavigationBundle\\Entity\\Menu\\Item',
                9 => 'Bigfoot\\Bundle\\MediaBundle\\Entity\\Metadata',
                10 => 'Bigfoot\\Bundle\\MediaBundle\\Entity\\MediaUsage',
                11 => 'Bigfoot\\Bundle\\MediaBundle\\Entity\\Media',
                12 => 'Bigfoot\\Bundle\\NavigationBundle\\Entity\\Menu',
                13 => 'Bigfoot\\Bundle\\NavigationBundle\\Entity\\Menu\\Item\\Attribute',
            ),
            'available_languages' => array(
                0 => 'fr',
                1 => 'en',
            ),
            'bigfoot_theme' => array(
                'title' => 'Sf3 + bigfoot',
                'subtitle' => 'Administration interface',
            ),
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => ($this->targetDirs[3].'/app/../var/sessions/dev'),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[3].'/app/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'AsseticBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'DoctrineBundle',
                8 => 'DoctrineFixturesBundle',
                9 => 'KnpPaginatorBundle',
                10 => 'KnpMenuBundle',
                11 => 'BazingaJsTranslationBundle',
                12 => 'BeSimpleI18nRoutingBundle',
                13 => 'CraueFormFlowBundle',
                14 => 'FOSJsRoutingBundle',
                15 => 'JMSTwigJsBundle',
                16 => 'JMSSerializerBundle',
                17 => 'JMSTranslationBundle',
                18 => 'LiipImagineBundle',
                19 => 'StofDoctrineExtensionsBundle',
                20 => 'WhiteOctoberPagerfantaBundle',
                21 => 'BigfootCoreBundle',
                22 => 'BigfootContextBundle',
                23 => 'BigfootNavigationBundle',
                24 => 'BigfootUserBundle',
                25 => 'BigfootContentBundle',
                26 => 'BigfootDefaultThemeBundle',
                27 => 'BigfootMediaBundle',
                28 => 'AppBundle',
                29 => 'DebugBundle',
                30 => 'WebProfilerBundle',
                31 => 'SensioDistributionBundle',
                32 => 'SensioGeneratorBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[3].'/app/../web'),
            'assetic.write_to' => ($this->targetDirs[3].'/app/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'be_simple_i18n_routing.router.class' => 'BeSimple\\I18nRoutingBundle\\Routing\\Router',
            'be_simple_i18n_routing.loader.xml.class' => 'BeSimple\\I18nRoutingBundle\\Routing\\Loader\\XmlFileLoader',
            'be_simple_i18n_routing.loader.yaml.class' => 'BeSimple\\I18nRoutingBundle\\Routing\\Loader\\YamlFileLoader',
            'be_simple_i18n_routing.translator.translation.class' => 'BeSimple\\I18nRoutingBundle\\Routing\\Translator\\TranslationTranslator',
            'craue.form.flow.class' => 'Craue\\FormFlowBundle\\Form\\FormFlow',
            'craue.form.flow.storage.class' => 'Craue\\FormFlowBundle\\Storage\\SessionStorage',
            'craue.form.flow.event_listener.previous_step_invalid.class' => 'Craue\\FormFlowBundle\\EventListener\\PreviousStepInvalidEventListener',
            'craue.form.flow.event_listener.previous_step_invalid.event' => 'flow.previous_step_invalid',
            'craue.form.flow.event_listener.flow_expired.class' => 'Craue\\FormFlowBundle\\EventListener\\FlowExpiredEventListener',
            'craue.form.flow.event_listener.flow_expired.event' => 'flow.flow_expired',
            'craue_twig_extensions.formflow.class' => 'Craue\\FormFlowBundle\\Twig\\Extension\\FormFlowExtension',
            'craue_formflow.util.class' => 'Craue\\FormFlowBundle\\Util\\FormFlowUtil',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.normalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RouteCollectionNormalizer',
            'fos_js_routing.normalizer.routes_response.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RoutesResponseNormalizer',
            'fos_js_routing.denormalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Denormalizer\\RouteCollectionDenormalizer',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'twig_js.compile_request_handler.class' => 'TwigJs\\CompileRequestHandler',
            'twig_js.compiler.class' => 'TwigJs\\JsCompiler',
            'twig_js.assetic_filter.class' => 'TwigJs\\Assetic\\TwigJsFilter',
            'twig_js.twig_js_extension.class' => 'TwigJs\\Twig\\TwigJsExtension',
            'twig_js.filters.trans_compiler.class' => 'JMS\\TwigJsBundle\\TwigJs\\Compiler\\TransFilterCompiler',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.file_source_factory.class' => 'JMS\\TranslationBundle\\Translation\\FileSourceFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(

            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.grayscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.flysystem.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\FlysystemResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripall' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripall' => true,
            'liip_imagine.filter.post_processor.pngquant.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor',
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.filter.post_processor.mozjpeg.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.cache.resolver.default' => false,
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'listing_site_1' => array(
                    'quality' => 90,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 300,
                                1 => 300,
                            ),
                            'mode' => 'inset',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'media_thumbnail' => array(
                    'quality' => 90,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 100,
                                1 => 100,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'media_single' => array(
                    'quality' => 90,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 300,
                                1 => 200,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'media_gallery' => array(
                    'quality' => 90,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 500,
                                1 => 250,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'theme.class' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Theme',
            'theme.section.toolbar' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\ToolbarSection',
            'theme.section.header' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\HeaderSection',
            'theme.section.sidebar' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\SidebarSection',
            'theme.section.page_header' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\PageHeaderSection',
            'theme.section.page_content' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\PageContentSection',
            'theme.section.footer' => 'Bigfoot\\Bundle\\CoreBundle\\Theme\\Section\\FooterSection',
            'kernel_listener.class' => 'Bigfoot\\Bundle\\CoreBundle\\Listener\\KernelListener',
            'translatable_type.class' => 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\TranslatedEntityType',
            'sortable_type.class' => 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\SortableEntityType',
            'bigfoot.crud.formatter.loader.class' => 'Bigfoot\\Bundle\\CoreBundle\\Crud\\Formatter\\Loader',
            'bigfoot.crud.formatter.date.class' => 'Bigfoot\\Bundle\\CoreBundle\\Crud\\Formatter\\DateFormatter',
            'bigfoot.crud.formatter.trans.class' => 'Bigfoot\\Bundle\\CoreBundle\\Crud\\Formatter\\TranslationFormatter',
            'bigfoot.core.translation.repository.class' => 'Bigfoot\\Bundle\\CoreBundle\\Entity\\TranslationRepository',
            'bigfoot.form.datepicker.type.class' => 'Bigfoot\\Bundle\\CoreBundle\\Form\\Type\\BigfootDatepickerType',
            'bigfoot.dashboard.class' => 'Bigfoot\\Bundle\\CoreBundle\\Controller\\DashboardController',
            'bigfoot_core.mailer.from' => 'sf3@localhost.com',
            'bigfoot_core.languages.back' => array(
                'fr' => array(
                    'date_format' => 'dd/MM/yyyy',
                ),
                'en' => array(
                    'date_format' => 'MM/dd/yyyy',
                ),
            ),
            'bigfoot_core.languages.front' => array(
                'fr' => array(
                    'label' => 'French',
                    'value' => 'fr',
                    'parameters' => array(
                        'default_country' => 'FR',
                        'fullLocale' => 'fr_FR',
                        'domain' => 'http://127.0.0.1:7080/',
                    ),
                ),
                'en' => array(
                    'label' => 'English',
                    'value' => 'en',
                    'parameters' => array(
                        'default_country' => 'GB',
                        'fullLocale' => 'en_GB',
                        'domain' => 'http://127.0.0.1:7080/en/',
                    ),
                ),
            ),
            'bigfoot_core.date_format' => 'd/m/Y',
            'bigfoot.scheme' => 'http',
            'bigfoot_context.language_back.loader.class' => 'Bigfoot\\Bundle\\ContextBundle\\Loader\\LanguageBackLoader',
            'bigfoot_context.contexts' => array(
                'language_back' => array(
                    'loaders' => array(
                        'bigfoot' => 'bigfoot_context.language_back.loader',
                    ),
                    'default_value' => 'en',
                    'values' => array(
                        'fr' => array(
                            'value' => 'fr',
                            'label' => 'Français',
                            'parameters' => array(
                                'date_format' => 'dd/MM/yyyy',
                                'default_front_locale' => 'fr',
                            ),
                        ),
                        'en' => array(
                            'value' => 'en',
                            'label' => 'Anglais',
                            'parameters' => array(
                                'date_format' => 'MM/dd/yyyy',
                                'default_front_locale' => 'en',
                            ),
                        ),
                    ),
                ),
            ),
            'bigfoot_context.entities' => array(

            ),
            'bigfoot_user' => array(
                'resetting' => array(
                    'token_ttl' => 1800,
                ),
                'menu_security' => array(

                ),
            ),
            'bigfoot_user.resetting.token_ttl' => 1800,
            'bigfoot_content.templates' => array(
                'page' => array(
                    'title_desc' => array(
                        'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDesc',
                        'sub_templates' => array(
                            'title_desc_1' => 'Simple page',
                        ),
                    ),
                    'title_desc_media' => array(
                        'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDescMedia',
                        'sub_templates' => array(
                            'title_desc_media_1' => 'Simple page with a picture',
                        ),
                    ),
                    'title_desc_media_block' => array(
                        'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDescMediaBlock',
                        'sub_templates' => array(
                            'title_desc_media_block_1' => 'Page with blocks',
                        ),
                    ),
                ),
                'sidebar' => array(
                    'block' => array(
                        'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Sidebar\\Template\\Block',
                        'sub_templates' => array(
                            'block_1' => 'Blocks',
                        ),
                    ),
                ),
                'block' => array(
                    'title_desc_media' => array(
                        'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Block\\Template\\TitleDescMedia',
                        'sub_templates' => array(
                            'title_desc_media_1' => 'Block (Title + Description + Media)',
                            'title_desc_media_2' => 'Block (Title + Description + Media)',
                            'title_desc_media_3' => 'Block (Title + Description + Media)',
                            'title_desc_media_4' => 'Block (Title + Description + Media)',
                            'title_desc_media_5' => 'Block (Title + Description + Media)',
                        ),
                    ),
                ),
            ),
            'bigfoot_content.templates.page' => array(
                'title_desc' => array(
                    'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDesc',
                    'sub_templates' => array(
                        'title_desc_1' => 'Simple page',
                    ),
                ),
                'title_desc_media' => array(
                    'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDescMedia',
                    'sub_templates' => array(
                        'title_desc_media_1' => 'Simple page with a picture',
                    ),
                ),
                'title_desc_media_block' => array(
                    'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Page\\Template\\TitleDescMediaBlock',
                    'sub_templates' => array(
                        'title_desc_media_block_1' => 'Page with blocks',
                    ),
                ),
            ),
            'bigfoot_content.templates.sidebar' => array(
                'block' => array(
                    'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Sidebar\\Template\\Block',
                    'sub_templates' => array(
                        'block_1' => 'Blocks',
                    ),
                ),
            ),
            'bigfoot_content.templates.block' => array(
                'title_desc_media' => array(
                    'class' => 'Bigfoot\\Bundle\\ContentBundle\\Entity\\Block\\Template\\TitleDescMedia',
                    'sub_templates' => array(
                        'title_desc_media_1' => 'Block (Title + Description + Media)',
                        'title_desc_media_2' => 'Block (Title + Description + Media)',
                        'title_desc_media_3' => 'Block (Title + Description + Media)',
                        'title_desc_media_4' => 'Block (Title + Description + Media)',
                        'title_desc_media_5' => 'Block (Title + Description + Media)',
                    ),
                ),
            ),
            'bigfoot.form.type.bigfoot_media.class' => 'Bigfoot\\Bundle\\MediaBundle\\Form\\Type\\BigfootMediaType',
            'bigfoot_media.provider' => NULL,
            'bigfoot_media.cache' => true,
            'bigfoot_media.pagination_per_page' => 5,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}
