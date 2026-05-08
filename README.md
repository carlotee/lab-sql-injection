# 🔥 Lab SQL Injection

Aplicación web vulnerable diseñada para practicar ataques de SQL Injection y comprender su mitigación mediante buenas prácticas de desarrollo seguro.

---

## 🧪 Tecnologías utilizadas

- PHP
- MySQL
- HTML

---

## ⚙️ Funcionalidades

- 🔐 Login con usuario o email
- 📊 Dashboard protegido con sesiones
- 🚪 Sistema de logout
- 💣 Vulnerabilidad intencional a SQL Injection

---
Base De Datos
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);
---

## 🧱 Estructura del proyecto

├── 📝 README.md

├── 🐘 dashboard.php

├── 📄 estructura

├── 🐘 login.php

└── 🐘 logout.php
