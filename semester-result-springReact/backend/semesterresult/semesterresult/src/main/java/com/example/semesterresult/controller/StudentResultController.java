package com.example.semesterresult.controller;

import com.example.semesterresult.model.StudentResult;
import com.example.semesterresult.repository.StudentResultRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.*;

@RestController
@RequestMapping("/api/results")
@CrossOrigin(origins = "*")
public class StudentResultController {

    @Autowired
    private StudentResultRepository repo;

    @PostMapping
    public StudentResult save(@RequestBody StudentResult result) {
        return repo.save(result);
    }

    @GetMapping
    public List<StudentResult> listAll() {
        return repo.findAll();
    }

    @GetMapping("/final-score/{id}")
    public ResponseEntity<Map<String, Double>> getFinalScore(@PathVariable Long id) {
        Optional<StudentResult> optional = repo.findById(id);
        if (optional.isEmpty()) {
            return ResponseEntity.notFound().build();
        }

        StudentResult r = optional.get();
        Map<String, Double> result = new HashMap<>();

        result.put("Subject 1", r.getSubject1Mse() * 0.3 + r.getSubject1Ese() * 0.7);
        result.put("Subject 2", r.getSubject2Mse() * 0.3 + r.getSubject2Ese() * 0.7);
        result.put("Subject 3", r.getSubject3Mse() * 0.3 + r.getSubject3Ese() * 0.7);
        result.put("Subject 4", r.getSubject4Mse() * 0.3 + r.getSubject4Ese() * 0.7);

        return ResponseEntity.ok(result);
    }
}
