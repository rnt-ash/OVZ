{% include "partials/core/partials/slideSectionState.volt" %}
<div class="panel-group">
    <div class="row">
        <div class="col-md-8 padding-small-right">
        {{ partial("partials/lxd/virtual_servers/general.volt") }}
        </div>
        <div class="col-md-4 padding-small-left">
        {{ partial("partials/lxd/virtual_servers/hwspecs.volt") }}
        </div>
        <div class="col-md-12">
        {{ partial("partials/lxd/virtual_servers/ip_objects.volt") }}
        </div>
    {% if item.lxd == 1 and permissions.checkPermission("virtual_servers", "snapshots") %}
        <div class="col-md-12">
        {{ partial("partials/lxd/virtual_servers/snapshots.volt") }}
        </div>
    {% endif %}
    </div>
</div>