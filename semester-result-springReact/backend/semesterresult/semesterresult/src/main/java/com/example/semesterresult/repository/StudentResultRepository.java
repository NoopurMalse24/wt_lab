package com.example.semesterresult.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.semesterresult.model.StudentResult;

public interface StudentResultRepository extends JpaRepository<StudentResult, Long> {
}