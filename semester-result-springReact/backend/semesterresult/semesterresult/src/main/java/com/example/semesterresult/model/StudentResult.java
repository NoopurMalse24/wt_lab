package com.example.semesterresult.model;

import jakarta.persistence.*;
import lombok.Getter;
import lombok.Setter;

@Entity
@Table(name = "student_results")
@Getter
@Setter
public class StudentResult {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String studentName;

    private int subject1Mse;
    private int subject1Ese;

    private int subject2Mse;
    private int subject2Ese;

    private int subject3Mse;
    private int subject3Ese;

    private int subject4Mse;
    private int subject4Ese;
}