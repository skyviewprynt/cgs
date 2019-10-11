<?php 
$json = '{
  "name": "First Last",
  "email": "anonymous@corp.com",
  "city_name": "San Francisco, California",
  "custom_responses": [
    {
      "label": "question 1",
      "response": "answer 1"
    },
    {
      "label": "question 2",
      "response": "answer 2"
    },
    {
      "label": "question 3",
      "response": "answer 3"
    }
  ],
  "education_experiences": {
    "data": [
      {
        "school": "University at Somewhere",
        "area_of_study": "Computer Science",
        "start": {
          "year": 2014
        },
        "end": {
          "year": 2016
        },
        "graduated": false
      },
      {
        "school": "University of Anotherwhere",
        "area_of_study": "Computer Science and Engineering",
        "start": {
          "year": 2010
        },
        "end": {
          "year": 2014
        },
        "graduated": false
      },
      {
        "school": "University of anywhere",
        "area_of_study": "General Coursework",
        "start": {
          "year": 2007
        },
        "end": {
          "year": 2010
        },
        "graduated": false
      }
    ]
  },
  "work_experiences": {
    "data": [
      {
        "company": "One company",
        "position": "Software Engineer",
        "current": true,
        "start": {
          "year": 2017,
          "month": 3
        }
      },
      {
        "company": "Another company",
        "position": "Internship",
        "current": false,
        "start": {
          "year": 2016
        },
        "end": {
          "year": 2016
        }
      }
    ]
  },
  "phone_number": "+1650xxxxxxx",
  "id": "83944172955xxxx",
  "resume_url": "https://download.resumeurl.com/resume"
}'; 

$data = json_decode($json); 

echo $data->name; 
echo "\n"; 

echo $data->email; 
?> 
