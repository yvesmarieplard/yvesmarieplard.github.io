---
layout: page
permalink: /resume/
title: My Resume
---
<style>
  .custom-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
  }

  .custom-button:hover {
    background-color: #0056b3;
  }
</style>

<div style="text-align: center; margin-top: -1.5%;">
  <a href="../_pages/resume/Yves-Marie_Plard_Resume_2023.pdf" download class="button">DOWNLOAD PDF</a>
</div>

<div class="resume">
  <!-- defining categories for resume -->
  {% assign categories = "|EXECUTIVE SUMMARY|WORK EXPERIENCE|EDUCATION|LANGUAGE & SKILLS|ACTIVITIES & INTERESTS|" | split: "|" %}

  {% for category in categories %}
    <div class="archive-group">
      <div id="#{{ category | slugize }}"></div>
      <h1 class="page">{{ category }}</h1>
      <a name="{{ category | slugize }}"></a>
        {% assign sorted_experiences = site.experiences | sort: 'date' | reverse %}
        {% for experience in sorted_experiences %}
          {% if experience.category == category %}
            <article class="resume">                
                    <div style= "display:inline-block;margin-right:10px;">
                      <h2>{{ experience.title }} {% if experience.website !="" %} <a href="{{ experience.website}}" target="_blank" style="margin-bottom: -5%; font-size: 1em;"> [link]</a>{%endif%}</h2>
                    </div>
                    <div style= "display: inline-block; float: right; margin-top: .5%;">
                    <h4> [{{ experience.startdate }} - {{ experience.enddate }}]</h4>
                  </div>
                <h3>{{ experience.subtitle }}</h3>
                <h4>{{ experience.location }}</h4>
                <div>
                  <p>{{ experience.excerpt }}</p>
                </div>
            </article>
          {%endif%}
        {% endfor %}
    </div>
  {% endfor %}
</div>