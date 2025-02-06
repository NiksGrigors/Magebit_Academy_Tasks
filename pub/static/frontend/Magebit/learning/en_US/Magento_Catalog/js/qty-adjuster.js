define(['knockout'], function(ko) {
    return function QuantityAdjuster(params) {
        var self = this;

        self.qty = ko.observable(params.qty || 1);  //qty - Default to 1 if undefined
        self.availableStock = ko.observable(params.availableStock || 0);  // Default to 0 stock

        // Stock availability
        self.stockAvailable = ko.computed(function() {
            return self.availableStock() > 0;
        });

        // Increase Quantity
        self.increaseQty = function() {
            if (self.qty() < self.availableStock()) {
                self.qty(self.qty() + 1);
            }
        };

        // Decrease Quantity
        self.decreaseQty = function() {
            if (self.qty() > 1) {
                self.qty(self.qty() - 1);
            }
        };
    };
});
