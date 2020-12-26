<?php

/**
 * ⚠️ Edition not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Contacto no encontrado',
    'people_list_number_kids' => '1 niño|:count niños',
    'people_list_last_updated' => 'Última consulta:',
    'people_list_number_reminders' => '1 recordatorio|:count recordatorios',
    'people_list_blank_title' => 'Todavía no tienes a nadie en tu cuenta',
    'people_list_blank_cta' => 'Añade a alguien',
    'people_list_sort' => 'Ordenar',
    'people_list_stats' => '1 contacto|:count contactos',
    'people_list_firstnameAZ' => 'Ordenar por nombre A → Z',
    'people_list_firstnameZA' => 'Ordenar por nombre Z → A',
    'people_list_lastnameAZ' => 'Ordenar por apellido A → Z',
    'people_list_lastnameZA' => 'Ordenar por apellido Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Ordenar por fecha de última actividad de más reciente a más antiguo',
    'people_list_lastactivitydateOldtoNew' => 'Ordenar por fecha de última actividad de más antiguo a más reciente',
    'people_list_filter_tag' => 'Mostrar todos los contactos etiquetados con',
    'people_list_clear_filter' => 'Quitar filtro',
    'people_list_contacts_per_tags' => '1 contacto|:count contactos',
    'people_list_show_dead' => 'Mostrar fallecidos (:count)',
    'people_list_hide_dead' => 'Ocultar fallecidos (:count)',
    'people_search' => 'Buscar en tus contactos...',
    'people_search_no_results' => 'No se encontraron resultados',
    'people_search_next' => 'Siguiente',
    'people_search_prev' => 'Anterior',
    'people_search_rows_per_page' => 'Filas por página:',
    'people_search_of' => 'de',
    'people_search_page' => 'Página',
    'people_search_all' => 'Todos',
    'people_add_new' => 'Añadir a una nueva persona',
    'people_list_account_usage' => 'Es uso de tu cuenta: :current/:limit contactos',
    'people_list_account_upgrade_title' => 'Actualiza tu cuenta para desbloquear todo su potencial.',
    'people_list_account_upgrade_cta' => 'Actualizar ahora',
    'people_list_untagged' => 'Ver contactos sin etiqueta',
    'people_list_filter_untag' => 'Mostrando todos los contactos sin etiqueta',

    // people add
    'people_add_title' => 'Añade a una nueva persona',
    'people_add_missing' => 'Ninguna Persona Encontrada, Añade Una Nueva Ahora',
    'people_add_firstname' => 'Nombre',
    'people_add_middlename' => 'Segundo Nombre (Opcional)',
    'people_add_lastname' => 'Apellido (Opcional)',
    'people_add_nickname' => 'Apodo (Opcional)',
    'people_add_cta' => 'Añadir',
    'people_save_and_add_another_cta' => 'Añadir y agregar a alguien más',
    'people_add_success' => ':name ha sido creado exitosamente',
    'people_add_gender' => 'Género',
    'people_delete_success' => 'El contacto ha sido eliminado',
    'people_delete_message' => 'Borrar contacto',
    'people_delete_confirmation' => '¿Estás seguro que quieres eliminar este usuario? Esta acción es permanente.',
    'people_add_birthday_reminder' => 'Desearle feliz cumpleaños a :name',
    'people_add_birthday_reminder_deceased' => 'En esta fecha, :name habría celebrado su cumpleaños',
    'people_add_import' => '¿Quieres <a href=":url">importar tus contactos</a>?',
    'people_edit_email_error' => 'Ya existe un contacto en tu cuenta con esta dirección de correo electrónico. Por favor, elije otro.',
    'people_export' => 'Exportar como vCard',
    'people_add_reminder_for_birthday' => 'Crear un recordatorio anual para el cumpleaños',

    // show
    'section_contact_information' => 'Información de contacto',
    'section_personal_activities' => 'Actividades',
    'section_personal_reminders' => 'Recordatorios',
    'section_personal_tasks' => 'Tareas',
    'section_personal_gifts' => 'Regalos',
    'section_personal_notes' => 'Notas',

    // archived contacts
    'list_link_to_active_contacts' => 'Usted está viendo los contactos archivados. Cambiar a ver la lista de <a href=":url">contactos activos</a>.',
    'list_link_to_archived_contacts' => 'Lista de contactos archivados',

    // Header
    'me' => 'Este eres tú',
    'edit_contact_information' => 'Editar información de contacto',
    'contact_archive' => 'Archivar contacto',
    'contact_unarchive' => 'Des-archivar contacto',
    'contact_archive_help' => 'Los contactos archivados no aparecerán en la lista de contactos, pero siguen apareciendo en los resultados de las búsquedas.',
    'call_button' => 'Registrar una llamada',
    'set_favorite' => 'Los contactos favoritos son colocados en la parte superior de la lista de contactos',

    // Stay in touch
    'stay_in_touch' => 'Mantenerse en contacto',
    'stay_in_touch_frequency' => 'Mantenerse en contacto cada día|Mantenerse en contacto cada {count} días',
    'stay_in_touch_invalid' => 'La frecuencia debe ser un número mayor que 0.',
    'stay_in_touch_premium' => 'Necesitas actualizar tu cuenta para hacer uso de esta característica',
    'stay_in_touch_modal_title' => 'Mantenerse en contacto',
    'stay_in_touch_modal_desc' => 'Podemos recordarte que te mantengas en contacto con {firstname} regularmente por correo electrónico.',
    'stay_in_touch_modal_label' => 'Envíame un correo cada día|Envíame un correo electrónico cada... {count} días',

    // Calls
    'modal_call_title' => 'Registrar una llamada',
    'modal_call_comment' => '¿De qué hablaron? (Opcional)',
    'modal_call_exact_date' => 'La llamada telefónica ocurrió el',
    'modal_call_who_called' => 'Quién llamó?',
    'modal_call_emotion' => '¿Deseas registrar cómo te sentiste durante esta llamada? (opcional)',
    'calls_add_success' => 'La llamada telefónica ha sido guardada.',
    'call_delete_confirmation' => '¿Estás seguro que deseas eliminar esta llamada?',
    'call_delete_success' => 'La llamada telefónica ha sido eliminada exitosamente',
    'call_title' => 'Llamadas telefónicas',
    'call_empty_comment' => 'No hay detalles',
    'call_blank_title' => 'Mantén un seguimiento de las llamadas realizadas con {name}',
    'call_blank_desc' => 'Has llamado a {name}',
    'call_you_called' => 'Has llamado',
    'call_he_called' => '{name} llamó',
    'call_emotions' => 'Emociones:',

    // Conversation
    'conversation_blank' => 'Registra conversaciones que has tenido con :name por redes sociales, SMS, ...',
    'conversation_delete_link' => 'Borrar conversación',
    'conversation_edit_title' => 'Editar conversación',
    'conversation_edit_delete' => '¿Estás seguro que quieres eliminar esta conversación? Esta acción es permanente.',
    'conversation_add_success' => 'La conversación ha sido añadida con éxito.',
    'conversation_edit_success' => 'La conversación ha sido actualizada con éxito.',
    'conversation_delete_success' => 'La conversación ha sido eliminada exitosamente.',
    'conversation_add_title' => 'Registrar una nueva conversación',
    'conversation_add_when' => '¿Cuándo tuviste esta conversación?',
    'conversation_add_who_wrote' => '¿Quién dijo esto?',
    'conversation_add_how' => '¿Qué medio utilizaste para comunicarte?',
    'conversation_add_you' => 'Tu',
    'conversation_add_content' => 'Escribe lo que se dijo',
    'conversation_add_what_was_said' => '¿Qué fue lo que dijiste?',
    'conversation_add_another' => 'Añade otro mensaje',
    'conversation_add_error' => 'Debes añadir al menos un mensaje.',
    'conversation_list_table_messages' => 'Mensajes',
    'conversation_list_table_content' => 'Contenido parcial (último mensaje)',
    'conversation_list_title' => 'Conversaciones',
    'conversation_list_cta' => 'Registrar conversación',

    // age - birthday
    'birthdate_not_set' => 'La fecha de nacimiento no ha establecida',
    'age_approximate_in_years' => 'aproximadamente :age años de edad',
    'age_exact_in_years' => ':age años de edad',
    'age_exact_birthdate' => 'nació el :date',

    // Last called
    'last_called' => 'Última llamada: :date',
    'last_called_empty' => 'Última llamada: desconocido',
    'last_activity_date' => 'Última actividad juntos: :date',
    'last_activity_date_empty' => 'Última actividad juntos: desconocido',

    // additional information
    'information_edit_success' => 'El perfil ha sido actualizado exitosamente',
    'information_edit_title' => 'Editar la información personal de :name',
    'information_edit_max_size' => 'Máximo :size Kb.',
    'information_edit_max_size2' => 'Máximo {size} kB.',
    'information_edit_firstname' => 'Nombre',
    'information_edit_lastname' => 'Apellido (Opcional)',
    'information_edit_description' => 'Descripción (opcional)',
    'information_edit_description_help' => 'Usado en la lista de contactos para agregar contexto, si fuera necesario.',
    'information_edit_unknown' => 'No sé la edad de esta persona',
    'information_edit_probably' => 'Esta persona probablemente tiene...',
    'information_edit_not_year' => 'Sé el día y mes de la fecha de nacimiento de esta persona, pero no el año…',
    'information_edit_exact' => 'Sé la fecha exacta de nacimiento de esta persona...',
    'information_edit_birthdate_label' => 'Fecha de Nacimiento',
    'information_no_work_defined' => 'Información de trabajo no definida',
    'information_work_at' => 'en: company',
    'work_add_cta' => 'Actualizar la información de trabajo',
    'work_edit_success' => 'La información de trabajo ha sido actualizada con éxito',
    'work_edit_title' => 'Actualizar la información de trabajo de :name',
    'work_edit_job' => 'Título (opcional)',
    'work_edit_company' => 'Empresa (opcional)',
    'work_information' => 'Información de trabajo',

    // food preferences
    'food_preferences_add_success' => 'Las preferencias de comida han sido guardadas',
    'food_preferences_edit_description' => 'Tal vez :firstname o alguien en la familia :family tiene una alergia. O no le gusta una botella específica de vino. Indica eso aquí, así lo recordaras la próxima vez que los invites a cenar',
    'food_preferences_edit_description_no_last_name' => 'Tal vez :firstname tiene una alergia. O no le gusta una botella específica de vino. Indica eso aquí, así lo recordaras la próxima vez que lo invites a cenar',
    'food_preferences_edit_title' => 'Indica preferencias en comida',
    'food_preferences_edit_cta' => 'Guardar preferencias en comida',
    'food_preferences_title' => 'Preferencias de comida',
    'food_preferences_cta' => 'Añadir preferencias en comida',

    // reminders
    'reminders_blank_title' => '¿Hay algo en lo que quisieras ser recordado sobre :name?',
    'reminders_blank_add_activity' => 'Agregar un recordatorio',
    'reminders_add_title' => '¿Qué te gustaría que se te recordara sobre :name?',
    'reminders_add_description' => 'Por favor recordarme...',
    'reminders_add_next_time' => '¿Cuándo es la próxima vez que te gustaría que te recordaramos sobre esto?',
    'reminders_add_once' => 'Recuerdame sobre esto solo una vez',
    'reminders_add_recurrent' => 'Recuerdame sobre esto cada',
    'reminders_add_starting_from' => 'a partir de la fecha indicada arriba',
    'reminders_add_cta' => 'Añadir recordatorio',
    'reminders_edit_update_cta' => 'Actualizar recordatorio',
    'reminders_add_error_custom_text' => 'Necesitas indicar un texto para este recordatorio',
    'reminders_create_success' => 'El recordatorio ha sido añadido exitosamente',
    'reminders_delete_success' => 'El recordatorio ha sido eliminado exitosamente',
    'reminders_update_success' => 'El recordatorio ha sido actualizado exitosamente',
    'reminders_add_optional_comment' => 'Comentario opcional',

    'reminder_frequency_day' => 'cada día|cada :number días',
    'reminder_frequency_week' => 'cada semana|cada :number semanas',
    'reminder_frequency_month' => 'cada mes|cada :number meses',
    'reminder_frequency_year' => 'cada año|cada :number años',
    'reminder_frequency_one_time' => 'el :date',
    'reminders_delete_confirmation' => '¿Estás seguro de que deseas eliminar este recordatorio?',
    'reminders_delete_cta' => 'Eliminar',
    'reminders_next_expected_date' => 'en',
    'reminders_cta' => 'Agregar un recordatorio',
    'reminders_description' => 'Te enviaremos un correo electrónico por cada uno de los siguientes recordatorios. Los recordatorios son enviados la mañana del día que el evento ocurre. Recordatorios automáticamente añadidos para cumpleaños no pueden ser eliminados. Si quieres cambiar esa fecha, edita la fecha de cumpleaños de los contactos.',
    'reminders_one_time' => 'Una vez',
    'reminders_type_week' => 'semana',
    'reminders_type_month' => 'mes',
    'reminders_type_year' => 'año',
    'reminders_birthday' => 'Cumpleaños de :name',
    'reminders_free_plan_warning' => 'Estas en el plan gratuito. Correos electrónicos no son enviados para este plan. Para recibir recordatorio por correo electrónico actualiza tu cuenta.',

    // relationships
    'relationship_form_add' => 'Añadir una nueva relación',
    'relationship_form_edit' => 'Editar una relación existente',
    'relationship_form_is_with' => 'Esta persona es...',
    'relationship_form_is_with_name' => ':name es...',
    'relationship_form_add_choice' => '¿Con quién es esta relación?',
    'relationship_form_create_contact' => 'Añade a una nueva persona',
    'relationship_form_associate_contact' => 'Un contacto existente',
    'relationship_form_associate_dropdown' => 'Busca y selecciona un contacto existente del menú desplegable a continuación',
    'relationship_form_associate_dropdown_placeholder' => 'Busca y selecciona un contacto existente',
    'relationship_form_also_create_contact' => 'Crear una entrada de contacto para esta persona.',
    'relationship_form_add_description' => 'Esto te permitirá tratar a esta persona como cualquier otro de tus contactos.',
    'relationship_form_add_no_existing_contact' => 'No tienes ningún contacto que se pueda relacionar con :name al momento.',
    'relationship_delete_confirmation' => '¿Estás seguro de que deseas eliminar esta relación? Esto es permanente.',
    'relationship_unlink_confirmation' => '¿Estás seguro de que deseas eliminar esta relación? Esta persona no será eliminada - solo la relación entre estas dos personas.',
    'relationship_form_add_success' => 'La relación ha sido creada exitosamente.',
    'relationship_form_deletion_success' => 'La relación ha sido eliminada.',

    // tasks
    'tasks_title' => 'Tareas',
    'tasks_blank_title' => 'Aún no tienes tareas.',
    'tasks_form_title' => 'Título',
    'tasks_form_description' => 'Descripción (opcional)',
    'tasks_add_task' => 'Añadir una tarea',
    'tasks_delete_success' => 'La tarea ha sido eliminada exitosamente',
    'tasks_complete_success' => 'La tarea ha cambiado de estado exitosamente',

    // activities
    'activity_title' => 'Actividades',
    'activity_type_category_simple_activities' => 'Actividades simples',
    'activity_type_category_sport' => 'Deportes',
    'activity_type_category_food' => 'Comida',
    'activity_type_category_cultural_activities' => 'Actividades culturales',
    'activity_type_just_hung_out' => 'solo pasamos el rato',
    'activity_type_watched_movie_at_home' => 'vimos una película en casa',
    'activity_type_talked_at_home' => 'solo hablamos en casa',
    'activity_type_did_sport_activities_together' => 'hicimos deporte juntos',
    'activity_type_ate_at_his_place' => 'comimos en su casa',
    'activity_type_went_bar' => 'fuimos al bar',
    'activity_type_ate_at_home' => 'comimos en casa',
    'activity_type_picnicked' => 'fuimos de picnic',
    'activity_type_ate_restaurant' => 'comimos en un restaurante',
    'activity_type_went_theater' => 'fuimos al teatro',
    'activity_type_went_concert' => 'fuimos a un concierto',
    'activity_type_went_play' => 'fuimos a jugar',
    'activity_type_went_museum' => 'fuimos al museo',
    'activities_add_activity' => 'Añadir actividad',
    'activities_add_more_details' => 'Añadir más detalles',
    'activities_add_emotions' => 'Añadir emociones',
    'activities_add_category' => 'Indicar una categoría',
    'activities_add_participants_cta' => 'Añadir participantes',
    'activities_item_information' => ':Activity. Sucedió el :date',
    'activities_add_title' => '¿Qué hiciste con {name}?',
    'activities_summary' => 'Describe lo que hiciste',
    'activities_add_pick_activity' => '(Opcional) ¿Te gustaría categorizar esta actividad? No tienes que hacerlo, pero esto te dará estadísticas en el futuro',
    'activities_add_date_occured' => 'La actividad tuvo lugar el...',
    'activities_add_participants' => '¿Quién, aparte de {name}, participó en esta actividad? (opcional)',
    'activities_add_emotions_title' => '¿Deseas registrar cómo te sentiste durante esta llamada? (opcional)',
    'activities_blank_title' => 'Dale seguimiento a lo que has hecho con {name} en el pasado, y de que han hablado',
    'activities_blank_add_activity' => 'Añadir una actividad',
    'activities_add_success' => 'La actividad ha sido añadida exitosamente',
    'activities_add_error' => 'Ocurrió un error al añadir la actividad',
    'activities_update_success' => 'La actividad ha sido actualizada exitosamente',
    'activities_delete_success' => 'La actividad ha sido eliminada exitosamente',
    'activities_who_was_involved' => '¿Quién estuvo envuelto?',
    'activities_activity' => 'Categoría de la Actividad',
    'activities_view_activities_report' => 'Ver reporte de actividades',
    'activities_profile_title' => 'Reporte de actividades entre :name y tu',
    'activities_profile_subtitle' => 'Has registrado :total_activities actividad con :name en total, y :activities_last_twelve_months en los últimos 12 meses.|Has registrado :total_activities actividades con :name en total, y :activities_last_twelve_months en los últimos 12 meses.',
    'activities_profile_year_summary_activity_types' => 'Aquí tienes un desglose del tipo de actvidades que han tenido juntos en :year',
    'activities_profile_year_summary' => 'Aquí tienes lo que han hecho en :year',
    'activities_profile_number_occurences' => ':value actividad|:value actividades',
    'activities_list_participants' => 'Participantes:',
    'activities_list_emotions' => 'Emociones sentidas:',
    'activities_list_date' => 'Ocurrió el',
    'activities_list_category' => 'Categoría:',

    // notes
    'notes_create_success' => 'La nota ha sido creada exitosamente',
    'notes_update_success' => 'La nota ha sido guardada exitosamente',
    'notes_delete_success' => 'La nota ha sido eliminada exitosamente',
    'notes_add_cta' => 'Añadir nota',
    'notes_favorite' => 'Añadir/remover de favoritos',
    'notes_delete_title' => 'Eliminar una nota',
    'notes_delete_confirmation' => '¿Estás seguro que deseas eliminar esta nota? Esta acción es permanente',

    // gifts
    'gifts_title' => 'Regalos',
    'gifts_add_success' => 'El regalo ha sido añadido exitosamente',
    'gifts_delete_success' => 'El regalo ha sido eliminado exitosamente',
    'gifts_delete_confirmation' => '¿Estás seguro que deseas eliminar este regalo?',
    'gifts_add_gift' => 'Añadir un regalo',
    'gifts_link' => 'Enlace',
    'gifts_for' => 'Para: {name}',
    'gifts_delete_cta' => 'Eliminar',
    'gifts_add_title' => 'Gestión de regalos para :name',
    'gifts_add_gift_idea' => 'Idea de regalo',
    'gifts_add_gift_already_offered' => 'Regalo ofrecido',
    'gifts_add_gift_received' => 'Regalos recibidos',
    'gifts_add_gift_title' => '¿Qué es este regalo?',
    'gifts_add_gift_name' => 'Nombre del regalo',
    'gifts_add_link' => 'Enlace al sitio web (opcional)',
    'gifts_add_value' => 'Valor (opcional)',
    'gifts_add_comment' => 'Comentario (opcional)',
    'gifts_add_recipient' => 'Destinatario (opcional)',
    'gifts_add_recipient_field' => 'Destinatario',
    'gifts_add_photo' => 'Foto (opcional)',
    'gifts_add_photo_title' => 'Añadir una foto para este regalo',
    'gifts_add_someone' => 'Este regalo es para alguien en particular de la familia de {name}',
    'gifts_delete_title' => 'Borrar un regalo',
    'gifts_ideas' => 'Idea de regalo',
    'gifts_offered' => 'Regalos ofrecidos',
    'gifts_offered_as_an_idea' => 'Marcar como una idea',
    'gifts_received' => 'Regalos recibidos',
    'gifts_view_comment' => 'Ver comentario',
    'gifts_mark_offered' => 'Marca como ofrecido',
    'gifts_update_success' => 'El regalo ha sido actualizado exitosamente',

    // debts
    'debt_delete_confirmation' => '¿Está seguro de que desea eliminar esta deuda?',
    'debt_delete_success' => 'La deuda ha sido eliminada exitosamente',
    'debt_add_success' => 'La deuda ha sido añadida exitosamente',
    'debt_title' => 'Deudas',
    'debt_add_cta' => 'Añadir deuda',
    'debt_you_owe' => 'Tú debes :amount',
    'debt_they_owe' => ':name te debe :amount',
    'debt_add_title' => 'Gestión de deudas',
    'debt_add_you_owe' => 'Tú le debes a :name',
    'debt_add_they_owe' => ':name te debe',
    'debt_add_amount' => 'la cantidad de',
    'debt_add_reason' => 'por la siguiente razón (opcional)',
    'debt_add_add_cta' => 'Añadir deuda',
    'debt_edit_update_cta' => 'Actualizar deuda',
    'debt_edit_success' => 'La deuda ha sido actualizada exitosamente',
    'debts_blank_title' => 'Gestiona deudas que tienes con :name ó deudas que :name te debe',

    // tags
    'tag_edit' => 'Editar etiqueta',
    'tag_add' => 'Agregar etiquetas',
    'tag_add_search' => 'Añadir o buscar etiquetas',
    'tag_no_tags' => 'No hay etiquetas aún',

    // Introductions
    'introductions_sidebar_title' => 'Cómo nos conocimos',
    'introductions_blank_cta' => 'Indica como conociste a :name',
    'introductions_title_edit' => '¿Cómo conociste a :name?',
    'introductions_additional_info' => 'Explica cómo y dónde se conocieron',
    'introductions_edit_met_through' => '¿Alguien te ha presentado esta persona?',
    'introductions_no_met_through' => 'Nadie',
    'introductions_first_met_date' => 'Fecha que se conocieron',
    'introductions_no_first_met_date' => 'No sé la fecha que nos conocimos',
    'introductions_first_met_date_known' => 'Esta es la fecha que nos conocimos',
    'introductions_add_reminder' => 'Añadir un recordatorio para celebrar este encuentro en el aniversario de cuando este evento sucedió',
    'introductions_update_success' => 'Has actualizado con éxito la información sobre cómo conociste a esta persona',
    'introductions_met_through' => 'Nos conocimos a través de <a href=":url">:name</a>',
    'introductions_met_date' => 'Nos conocimos en :date',
    'introductions_reminder_title' => 'Aniversario del día que se conocieron',

    // Deceased
    'deceased_reminder_title' => 'Aniversario de la muerte de :name',
    'deceased_mark_person_deceased' => 'Marcar esta persona como fallecida',
    'deceased_know_date' => 'Conozco la fecha que esta persona falleció',
    'deceased_add_reminder' => 'Añadir un recordatorio para esta fecha',
    'deceased_label' => 'Fallecido',
    'deceased_date_label' => 'Fecha de defunción',
    'deceased_label_with_date' => 'Fallecido el',
    'deceased_age' => 'Edad al momento del fallecimiento',

    // Contact information
    'contact_info_title' => 'Información de contacto',
    'contact_info_form_content' => 'Contenido',
    'contact_info_form_contact_type' => 'Tipo de contacto',
    'contact_info_form_personalize' => 'Personalizar',
    'contact_info_address' => 'Vive en',

    // Addresses
    'contact_address_title' => 'Direcciones',
    'contact_address_form_name' => 'Etiqueta (opcional)',
    'contact_address_form_street' => 'Calle (opcional)',
    'contact_address_form_city' => 'Ciudad (opcional)',
    'contact_address_form_province' => 'Provincia (opcional)',
    'contact_address_form_postal_code' => 'Código postal (opcional)',
    'contact_address_form_country' => 'País (opcional)',
    'contact_address_form_latitude' => 'Latitud (sólo números) (opcional)',
    'contact_address_form_longitude' => 'Longitud (sólo números) (opcional)',

    // Pets
    'pets_kind' => 'Tipo de mascota',
    'pets_name' => 'Nombre (opcional)',
    'pets_create_success' => 'La mascota ha sido añadida',
    'pets_update_success' => 'La mascota ha sido actualizada',
    'pets_delete_success' => 'La mascota ha sido eliminada',
    'pets_title' => 'Mascotas',
    'pets_reptile' => 'Reptil',
    'pets_bird' => 'Ave',
    'pets_cat' => 'Gato',
    'pets_dog' => 'Perro',
    'pets_fish' => 'Pez',
    'pets_hamster' => 'Hámster',
    'pets_horse' => 'Caballo',
    'pets_rabbit' => 'Conejo',
    'pets_rat' => 'Rata',
    'pets_small_animal' => 'Animal pequeño',
    'pets_other' => 'Otro',

    // life events
    'life_event_list_tab_life_events' => 'Eventos cotidianos',
    'life_event_list_tab_other' => 'Notas, recordatorios...',
    'life_event_list_title' => 'Eventos cotidianos',
    'life_event_blank' => 'Apunta los hechos de la vida de {name} Para tu futura referencia.',
    'life_event_list_cta' => 'Añade un evento notable',
    'life_event_create_category' => 'Todas las categorías',
    'life_event_create_life_event' => 'Añade un evento notable',
    'life_event_create_default_title' => 'Título (opcional)',
    'life_event_create_default_story' => 'Historia (opcional)',
    'life_event_create_date' => 'No necesitará indicar un mes o un día - sólo el año es obligatorio.',
    'life_event_create_default_description' => 'Añadir información sobre lo que sabes',
    'life_event_create_add_yearly_reminder' => 'Añadir un recordatorio anual para este evento',
    'life_event_create_success' => 'El evento notable ha sido añadido',
    'life_event_delete_title' => 'Borrar un evento notable',
    'life_event_delete_description' => '¿Estás seguro que quieres eliminar este evento notable? Esta acción es permanente.',
    'life_event_delete_success' => 'El evento notable ha sido eliminado',
    'life_event_date_it_happened' => 'Fecha cuando ocurrió',
    'life_event_category_work_education' => 'Trabajo y educación',
    'life_event_category_family_relationships' => 'Familia y amistades',
    'life_event_category_home_living' => 'Hogar y estilo de vida',
    'life_event_category_health_wellness' => 'Salud y bienestar',
    'life_event_category_travel_experiences' => 'Viajes y experiencias',
    'life_event_sentence_new_job' => 'Comenzó un nuevo trabajo',
    'life_event_sentence_retirement' => 'Jubilado',
    'life_event_sentence_new_school' => 'Comenzó la escuela',
    'life_event_sentence_study_abroad' => 'Estudió en el extranjero',
    'life_event_sentence_volunteer_work' => 'Comenzó a ser voluntario',
    'life_event_sentence_published_book_or_paper' => 'Publicó un artículo',
    'life_event_sentence_military_service' => 'Comenzó el servicio militar',
    'life_event_sentence_new_relationship' => 'Comenzó una relación',
    'life_event_sentence_engagement' => 'Se comprometió',
    'life_event_sentence_marriage' => 'Se casó',
    'life_event_sentence_anniversary' => 'Aniversario',
    'life_event_sentence_expecting_a_baby' => 'Espera un bebé',
    'life_event_sentence_new_child' => 'Tuvo un hijo',
    'life_event_sentence_new_family_member' => 'Añadido un miembro familiar',
    'life_event_sentence_new_pet' => 'Consiguió una mascota',
    'life_event_sentence_end_of_relationship' => 'Finalizó una relación',
    'life_event_sentence_loss_of_a_loved_one' => 'Perdió un ser querido',
    'life_event_sentence_moved' => 'Se trasladó',
    'life_event_sentence_bought_a_home' => 'Compró una casa',
    'life_event_sentence_home_improvement' => 'Hizo unas mejoras en el hogar',
    'life_event_sentence_holidays' => 'Se fue de vacaciones',
    'life_event_sentence_new_vehicle' => 'Consiguió un vehículo nuevo',
    'life_event_sentence_new_roommate' => 'Encontró alguien para compartir piso',
    'life_event_sentence_overcame_an_illness' => 'Superó una enfermedad',
    'life_event_sentence_quit_a_habit' => 'Dejó un vicio',
    'life_event_sentence_new_eating_habits' => 'Empezó nuevos hábitos alimenticios',
    'life_event_sentence_weight_loss' => 'Perdió peso',
    'life_event_sentence_wear_glass_or_contact' => 'Empezó a llevar gafas o lentillas',
    'life_event_sentence_broken_bone' => 'Se rompió un hueso',
    'life_event_sentence_removed_braces' => 'Se quitó los brackets',
    'life_event_sentence_surgery' => 'Tuvo una operación',
    'life_event_sentence_dentist' => 'Fue al dentista',
    'life_event_sentence_new_sport' => 'Inició la práctica de un deporte',
    'life_event_sentence_new_hobby' => 'Comenzó un hobby',
    'life_event_sentence_new_instrument' => 'Aprendió un nuevo instrumento',
    'life_event_sentence_new_language' => 'Aprendió un idioma adicional',
    'life_event_sentence_tattoo_or_piercing' => 'Se hizo un tatuaje o piercing',
    'life_event_sentence_new_license' => 'Consiguió un permiso',
    'life_event_sentence_travel' => 'Viajado',
    'life_event_sentence_achievement_or_award' => 'Consiguió un logro o premio',
    'life_event_sentence_changed_beliefs' => 'Creencias cambiadas',
    'life_event_sentence_first_word' => 'Habló por primera vez',
    'life_event_sentence_first_kiss' => 'Su primer beso',

    // documents
    'document_list_title' => 'Documentos',
    'document_list_cta' => 'Subir documento',
    'document_list_blank_desc' => 'Aquí usted puede almacenar documentos relacionados con esta persona.',
    'document_upload_zone_cta' => 'Subir un fichero',
    'document_upload_zone_progress' => 'Subiendo el documento...',
    'document_upload_zone_error' => 'Se produjo un error al subir el archivo. Por favor inténtelo de nuevo.',

    // Photos
    'photo_title' => 'Fotos',
    'photo_list_title' => 'Fotos relacionadas',
    'photo_list_cta' => 'Subir foto',
    'photo_list_blank_desc' => 'Puede almacenar imágenes acerca de este contacto. ¡Suba una ahora!',
    'photo_upload_zone_cta' => 'Carga una foto',
    'photo_current_profile_pic' => 'Foto de perfil actual',
    'photo_make_profile_pic' => 'Usar como foto de perfil',
    'photo_delete' => 'Eliminar foto',
    'photo_next' => 'Foto siguiente',
    'photo_previous' => 'Foto anterior',

    // Avatars
    'avatar_change_title' => 'Cambiar el avatar',
    'avatar_question' => '¿Qué avatar deseas usar?',
    'avatar_default_avatar' => 'El avatar por defecto',
    'avatar_adorable_avatar' => 'El avatar Adorable',
    'avatar_gravatar' => 'El "Gravatar" asociado con la dirección de correo electrónico de esta persona. <a href="https://gravatar.com/">Gravatar</a> es un sistema global que permite a los usuarios asociar direcciones de correo electrónico con fotos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'Esto te hizo sentir…',

    // logs
    'auditlogs_link' => 'Historial',
    'auditlogs_title' => 'Todo lo que le pasó a :name',
    'auditlogs_breadcrumb' => 'Historial',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];
