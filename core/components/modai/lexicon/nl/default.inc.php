<?php

$_lang['modai.admin.menu.home'] = 'modAI';
$_lang['modai.admin.menu.home_desc'] = 'Configureer modAI';

$_lang['modai.admin.home.page_title'] = 'modAI';
$_lang['modai.admin.home.agents'] = 'Agents';
$_lang['modai.admin.home.tools'] = 'Tools';
$_lang['modai.admin.home.context_providers'] = 'Context Providers';
$_lang['modai.admin.home.prompt_library'] = 'Prompt Bibliotheek';

$_lang['modai.admin.global.no_records'] = 'Geen records gevonden.';
$_lang['modai.admin.global.any'] = 'Alle';

$_lang['modai.admin.context_provider.name'] = 'Naam';
$_lang['modai.admin.context_provider.description'] = 'Beschrijving';
$_lang['modai.admin.context_provider.description_desc'] = 'Interne beschrijving van de context provider.';
$_lang['modai.admin.context_provider.enabled'] = 'Ingeschakeld';
$_lang['modai.admin.context_provider.enabled_desc'] = 'Indien uitgeschakeld, zal de context provider de prompt niet aanvullen.';
$_lang['modai.admin.context_provider.create'] = 'Context Provider Aanmaken';
$_lang['modai.admin.context_provider.update'] = 'Context Provider Bijwerken';
$_lang['modai.admin.context_provider.remove'] = 'Context Provider Verwijderen';
$_lang['modai.admin.context_provider.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" context provider permanent wilt verwijderen?';
$_lang['modai.admin.context_provider.search'] = 'Zoeken op naam';
$_lang['modai.admin.context_provider.select_class_for_config'] = 'Selecteer Context Provider Class om deze te configureren.';
$_lang['modai.admin.context_provider.no_config'] = "Context Provider Class heeft geen configuratie beschikbaar.";
$_lang['modai.admin.context_provider.config'] = "Configuratie";
$_lang['modai.admin.context_provider.context_provider'] = "Context Provider";
$_lang['modai.admin.context_provider.class'] = "Context Provider Class";
$_lang['modai.admin.context_provider.agents'] = 'Agents';

$_lang['modai.admin.tool.name'] = 'Naam';
$_lang['modai.admin.tool.description'] = 'Beschrijving';
$_lang['modai.admin.tool.description_desc'] = 'Interne beschrijving van de tool.';
$_lang['modai.admin.tool.enabled'] = 'Ingeschakeld';
$_lang['modai.admin.tool.enabled_desc'] = 'Indien uitgeschakeld, is de tool niet beschikbaar voor het model.';
$_lang['modai.admin.tool.default'] = 'Standaard';
$_lang['modai.admin.tool.default_desc'] = 'Indien ingeschakeld, is de tool beschikbaar voor elke prompt, zelfs zonder agent.';
$_lang['modai.admin.tool.create'] = 'Tool Aanmaken';
$_lang['modai.admin.tool.update'] = 'Tool Bijwerken';
$_lang['modai.admin.tool.remove'] = 'Tool Verwijderen';
$_lang['modai.admin.tool.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" tool permanent wilt verwijderen?';
$_lang['modai.admin.tool.search'] = 'Zoeken op naam';
$_lang['modai.admin.tool.select_class_for_config'] = 'Selecteer Tool Class om deze te configureren.';
$_lang['modai.admin.tool.no_config'] = "Tool Class heeft geen configuratie beschikbaar.";
$_lang['modai.admin.tool.config'] = "Configuratie";
$_lang['modai.admin.tool.context_provider'] = "Tool";
$_lang['modai.admin.tool.class'] = "Tool Class";
$_lang['modai.admin.tool.tool'] = 'Tool';
$_lang['modai.admin.tool.agents'] = 'Agents';
$_lang['modai.admin.tool.prompt'] = 'Prompt';
$_lang['modai.admin.tool.prompt_desc'] = 'Beschrijving van de tool voor de AI. Standaard gebruikt het de standaard van de tool class, maar je kunt deze overschrijven en aanpassen.';

$_lang['modai.admin.tool.config.clear_cache'] = 'Cache Legen';
$_lang['modai.admin.tool.config.clear_cache_desc'] = 'Indien ingeschakeld, wordt de cache automatisch geleegd na gebruik van deze tool.';

$_lang['modai.admin.agent.name'] = 'Naam';
$_lang['modai.admin.agent.description'] = 'Beschrijving';
$_lang['modai.admin.agent.enabled'] = 'Ingeschakeld';
$_lang['modai.admin.agent.enabled_desc'] = 'Indien uitgeschakeld, verschijnt de agent niet in de agent selectie.';
$_lang['modai.admin.agent.create'] = 'Agent Aanmaken';
$_lang['modai.admin.agent.update'] = 'Agent Bijwerken';
$_lang['modai.admin.agent.remove'] = 'Agent Verwijderen';
$_lang['modai.admin.agent.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" agent permanent wilt verwijderen?';
$_lang['modai.admin.agent.search'] = 'Zoeken op naam';
$_lang['modai.admin.agent.agent'] = "Agent";
$_lang['modai.admin.agent.model'] = "Model";
$_lang['modai.admin.agent.model_desc'] = "Model dat gebruikt wordt met deze agent. Kan ook ingesteld worden in geavanceerde configuratie als global.text.model.";
$_lang['modai.admin.agent.description'] = "Beschrijving";
$_lang['modai.admin.agent.config'] = "Configuratie";
$_lang['modai.admin.agent.prompt'] = "Prompt";
$_lang['modai.admin.agent.prompt_desc'] = 'Aangepaste prompt die wordt verzonden als systeeminstructies.';
$_lang['modai.admin.agent.tools'] = 'Tools';
$_lang['modai.admin.agent.context_providers'] = 'Context Providers';
$_lang['modai.admin.agent.advanced_config'] = 'Geavanceerde Configuratie';
$_lang['modai.admin.agent.advanced_config_desc'] = 'Overschrijf elke configuratie-optie van het model.';
$_lang['modai.admin.agent.advanced_config.field'] = 'Veld';
$_lang['modai.admin.agent.advanced_config.area'] = 'Gebied';
$_lang['modai.admin.agent.advanced_config.setting'] = 'Instelling';
$_lang['modai.admin.agent.advanced_config.value'] = 'Waarde';
$_lang['modai.admin.agent.advanced_config.add_option'] = 'Optie Toevoegen';
$_lang['modai.admin.agent.advanced_config.remove_option'] = 'Optie Verwijderen';
$_lang['modai.admin.agent.user_groups'] = 'Gebruikersgroepen';

$_lang['modai.admin.agent_tool.create'] = 'Tool Toewijzen';
$_lang['modai.admin.agent_tool.remove'] = 'Tool Ontkoppelen';
$_lang['modai.admin.agent_tool.view'] = 'Tool Bekijken';
$_lang['modai.admin.agent_tool.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" tool wilt ontkoppelen van deze agent?';

$_lang['modai.admin.agent_context_provider.create'] = 'Context Provider Toewijzen';
$_lang['modai.admin.agent_context_provider.remove'] = 'Context Provider Ontkoppelen';
$_lang['modai.admin.agent_context_provider.view'] = 'Context Provider Bekijken';
$_lang['modai.admin.agent_context_provider.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" context provider wilt ontkoppelen van deze agent?';

$_lang['modai.admin.related_agent.agents'] = 'Agenten';
$_lang['modai.admin.related_agent.create'] = 'Agent Toewijzen';
$_lang['modai.admin.related_agent.view'] = 'Agent Bekijken';
$_lang['modai.admin.related_agent.remove'] = 'Agent Ontkoppelen';
$_lang['modai.admin.related_agent.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" agent wilt ontkoppelen?';

$_lang['modai.admin.context_provider.pinecone.api_key'] = 'API Sleutel';
$_lang['modai.admin.context_provider.pinecone.api_key_desc'] = 'API Sleutel voor toegang tot Pinecone';
$_lang['modai.admin.context_provider.pinecone.endpoint'] = 'API endpoint';
$_lang['modai.admin.context_provider.pinecone.endpoint_desc'] = 'Endpoint van je Pinecone API instance.';
$_lang['modai.admin.context_provider.pinecone.namespace'] = 'Namespace';
$_lang['modai.admin.context_provider.pinecone.namespace_desc'] = 'Namespace die gebruikt wordt om je data op te slaan/op te vragen.';
$_lang['modai.admin.context_provider.pinecone.fields'] = 'Te indexeren velden';
$_lang['modai.admin.context_provider.pinecone.fields_desc'] = 'Kommagescheiden lijst van velden die geïndexeerd moeten worden.';
$_lang['modai.admin.context_provider.pinecone.id_field'] = 'Id Veld';
$_lang['modai.admin.context_provider.pinecone.id_field_desc'] = 'Naam van het Id veld, kan elke {field} (beschikbaar vanuit pinecone) placeholder bevatten, je kunt ook een systeeminstelling refereren door ++ als voorvoegsel te gebruiken, bijvoorbeeld {++site_url}. Als je dit gebruikt voor MODX resources/elements via de standaard integratie, gebruik dan `{type}_id`.';
$_lang['modai.admin.context_provider.pinecone.fields_map'] = 'Velden koppelen aan andere naam';
$_lang['modai.admin.context_provider.pinecone.fields_map_desc'] = 'Kommagescheiden lijst van originele_naam:nieuwe_naam paren';
$_lang['modai.admin.context_provider.pinecone.output_fields'] = 'Output velden';
$_lang['modai.admin.context_provider.pinecone.output_fields_desc'] = 'Kommagescheiden lijst van velden (beschikbaar vanuit pinecone) die opgenomen worden in de context. Voor betere controle over de output, kun je dit leeg laten en Context Berichten gebruiken.';
$_lang['modai.admin.context_provider.pinecone.context_messages'] = 'Context Berichten';
$_lang['modai.admin.context_provider.pinecone.context_messages_desc'] = 'Aanvullende context berichten die voor de data uit de DB geplaatst worden. Eén bericht per regel. Kan {id} of elke {field} (beschikbaar vanuit pinecone) placeholder bevatten, je kunt ook een systeeminstelling refereren door ++ als voorvoegsel te gebruiken, bijvoorbeeld {++site_url}.';
$_lang['modai.admin.context_provider.pinecone.api_version'] = 'API Versie';
$_lang['modai.admin.context_provider.pinecone.api_version_desc'] = 'Te gebruiken API versie. Standaard: 2025-04';

$_lang['modai.admin.prompt_library.category'] = 'Categorie';

$_lang['modai.admin.prompt_library.prompt.name'] = 'Naam';
$_lang['modai.admin.prompt_library.prompt.enabled'] = 'Ingeschakeld';
$_lang['modai.admin.prompt_library.prompt.rank'] = 'Rang';
$_lang['modai.admin.prompt_library.prompt.create'] = 'Prompt Aanmaken';
$_lang['modai.admin.prompt_library.prompt.update'] = 'Prompt Bijwerken';
$_lang['modai.admin.prompt_library.prompt.remove'] = 'Prompt Verwijderen';
$_lang['modai.admin.prompt_library.prompt.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" prompt permanent wilt verwijderen?';
$_lang['modai.admin.prompt_library.prompt.search'] = 'Zoeken';
$_lang['modai.admin.prompt_library.prompt.category'] = 'Categorie';
$_lang['modai.admin.prompt_library.prompt.prompt'] = 'Prompt';
$_lang['modai.admin.prompt_library.prompt.public'] = 'Openbaar';

$_lang['modai.admin.prompt_library.category.name'] = 'Naam';
$_lang['modai.admin.prompt_library.category.enabled'] = 'Ingeschakeld';
$_lang['modai.admin.prompt_library.category.create'] = 'Categorie Aanmaken';
$_lang['modai.admin.prompt_library.category.create_child'] = 'Subcategorie Aanmaken';
$_lang['modai.admin.prompt_library.category.update'] = 'Categorie Bijwerken';
$_lang['modai.admin.prompt_library.category.remove'] = 'Categorie Verwijderen';
$_lang['modai.admin.prompt_library.category.remove_confirm'] = 'Weet je zeker dat je "[[+name]]" categorie en alle subcategorieën inclusief prompts permanent wilt verwijderen?';
$_lang['modai.admin.prompt_library.category.text'] = 'Tekst';
$_lang['modai.admin.prompt_library.category.image'] = 'Afbeelding';
$_lang['modai.admin.prompt_library.category.type'] = 'Type';
$_lang['modai.admin.prompt_library.category.public'] = 'Openbaar';

$_lang['modai.admin.error.required'] = 'Veld is verplicht.';

$_lang['modai.admin.error.context_provider_name_already_exists'] = 'Context Provider met deze naam bestaat al.';
$_lang['modai.admin.error.context_provider_wrong_interface'] = 'Context Provider class implementeert de \modAI\ContextProviders\ContextProviderInterface niet';
$_lang['modai.admin.error.context_provider_not_found'] = 'Context Provider werd niet gevonden.';

$_lang['modai.admin.error.tool_name_already_exists'] = 'Tool met deze naam bestaat al.';
$_lang['modai.admin.error.tool_wrong_interface'] = 'Context Provider class implementeert de \modAI\Tools\ToolInterface niet';
$_lang['modai.admin.error.tool_not_found'] = 'Context Provider werd niet gevonden.';

$_lang['modai.admin.error.agent_name_already_exists'] = 'Agent met deze naam bestaat al.';
$_lang['modai.admin.error.agent_not_found'] = 'Agent werd niet gevonden.';

$_lang['modai.admin.error.agent_tool_not_found'] = "Agent's Tool werd niet gevonden.";
$_lang['modai.admin.error.agent_context_provider_not_found'] = "Agent's Context Provider werd niet gevonden.";
$_lang['modai.admin.error.agent_id_required'] = 'Agent id is verplicht.';
$_lang['modai.admin.error.related_agent_tool_context_provider_required'] = 'Tool id of Context provider id is verplicht.';
$_lang['modai.admin.error.related_agent_not_found'] = 'Gerelateerde agent niet gevonden.';
$_lang['modai.admin.error.prompt_library_delete_root'] = 'Kan root categorie niet verwijderen.';
