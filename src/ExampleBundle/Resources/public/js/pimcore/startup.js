pimcore.registerNS("pimcore.plugin.ExampleBundle");

pimcore.plugin.ExampleBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.ExampleBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("ExampleBundle ready!");
    }
});

var ExampleBundlePlugin = new pimcore.plugin.ExampleBundle();
