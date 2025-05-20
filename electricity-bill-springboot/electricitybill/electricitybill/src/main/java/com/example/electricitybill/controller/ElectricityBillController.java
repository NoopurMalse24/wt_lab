package com.example.electricitybill.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class ElectricityBillController {

    @GetMapping("/")
    public String showForm() {
        return "index"; // Return the main HTML page (Thymeleaf template)
    }

    @PostMapping("/calculate")
    @ResponseBody
    public String calculateBill(@RequestParam("units") int units) {
        double bill = calculateElectricityBill(units);
        return String.format("Total Bill for %d units is Rs. %.2f", units, bill);
    }

    private double calculateElectricityBill(int units) {
        double bill = 0;

        if (units <= 50) {
            bill = units * 3.5;
        } else if (units <= 150) {
            bill = 50 * 3.5 + (units - 50) * 4.0;
        } else if (units <= 250) {
            bill = 50 * 3.5 + 100 * 4.0 + (units - 150) * 5.2;
        } else {
            bill = 50 * 3.5 + 100 * 4.0 + 100 * 5.2 + (units - 250) * 6.5;
        }

        return bill;
    }
}
