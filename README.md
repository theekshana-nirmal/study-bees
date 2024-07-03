# Study Bees: Study Partner Finding Platform

![Study Bees Logo](https://studybees.webeauna.com/assets/images/logo/logo-light.png)

## Overview

Welcome to **Study Bees**! We are a dedicated group of first-year BICT undergraduate students at Uva Wellassa University, Sri Lanka, working together to create a supportive learning community. Our platform helps students connect with ideal study partners based on subjects, making it easier to collaborate and succeed academically.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Running the Project](#running-the-project)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- **User Registration**: Students can create accounts by providing personal details such as First Name, Last Name, Email, Password, and Weak Subjects.
- **User Login**: Registered users can log in using their email and password.
- **Study Partner browse**: Logged-in users can browse study partners based on subjects.
- **Profile Viewing**: Users can view profile details of potential study partners.
- **Profile Management**: Users can update their profile information, change the profile picture.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Apache or XAMPP](https://www.apachefriends.org/index.html)

### Installation

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/theekshana-nirmal/study-bees.git
   cd study-bees
   ```

2. **Setup Database:**

   - Create a new MySQL database.
   - Import the `study_bees.sql` file located in the `sql` folder into your database.

3. **Configure Database Connection:**

   - Update the `db_connect.php` file in the `includes` directory with your database credentials.

4. **Start Apache Server:**

   - Start your Apache server via XAMPP or any other method.

### Running the Project

- Place the project files in your server's root directory (e.g., `htdocs` for XAMPP).
- Access the project via `http://localhost/study-bees`.

## Usage

1. **Visit the Website:**

   Navigate to `https://studybees.webeauna.com/` to access the platform. (Online)

2. **Register:**

   Fill in the registration form with your details to create an account.

3. **Login:**

   Use your email and password to log in to the platform.

4. **Find Study Partners:**

   Browse study partners based on your weak subjects.

5. **Profile Management:**

   Update your profile information, change your profile picture, and set your study status.


## Contributing

We welcome contributions to enhance the platform!

1. **Fork the Project:**

   Click on the fork button at the top right of this page to create a copy of this repository on your GitHub account.

2. **Create a New Branch:**

   ```bash
   git checkout -b feature/YourFeatureName
   ```

3. **Commit Your Changes:**

   ```bash
   git commit -m 'Add some feature'
   ```

4. **Push to the Branch:**

   ```bash
   git push origin feature/YourFeatureName
   ```

5. **Open a Pull Request:**

   Open a pull request from your forked repository to this main repository.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

- **Project Team Members:**
  - P.G.Theekshana Nirmal Bandara ([Profile](https://github.com/theekshana-nirmal))
  - G.Nimna Kshithija ([Profile](https://github.com/Nimna92))
  - D.M.Janith Navodya Dasanayaka
  - T.A.Vithanage
  - K.A. Sajani Nimeshika

- **Project Repository:** [Study Bees GitHub](https://github.com/theekshana-nirmal/study-bees/)
