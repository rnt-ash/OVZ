{# Edit virtual server form #}

{{ partial("partials/core/partials/renderFormElement") }}   

<div class="page-header">
    <h2><i class="fa fa-cube" aria-hidden="true"></i>{{ _("virtualserver_title") }}</h2>
</div>

<div class="well">
    <div class="row">
        {{ form("virtual_servers/virtualServerModifyExecute", 'role': 'form') }}
        {{ form.get('id').render() }}

        {% if form.hasMessagesFor('id') %}
            <div class="alert alert-danger" role="alert">{{form.getMessagesFor('id')[0]}}</div>  
        {% endif %}

        <div class="clearfix">
            {{ renderElement('name',form,6) }}
            {{ renderElement('customers',form,6,'autocomplete') }}
        </div>
        <div class="clearfix">
            {{ renderElement('activation_date',form,6,'datepicker','','bottom') }}
            {{ renderElement('description',form )}}
        </div>

        <div class="col-lg-12">
            {{ submit_button(_("virtualserver_save"), "class": "btn btn-primary loadingScreen") }}
            {{ link_to('/virtual_servers/slidedata', _("virtualserver_cancel"), 'class': 'btn btn-default pull-right') }}
        </div>
        </form>
    </div>
</div>