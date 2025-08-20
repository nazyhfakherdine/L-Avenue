# 🏨 Hotel Management API Documentation

Base URL: `{{base_url}}`

---

## 🔐 Authentication

### Register User
- **Endpoint**: `POST {{base_url}}/register`
- **Body Parameters**:
  ```json
  {
    "name": "John Doe",
    "email": "john@example.com",
    "password": "secret123",
    "password_confirmation": "secret123"
  }
  ```
- **Response**:
  ```json
  {
    "message": "User registered successfully!",
    "user": {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com",
      "created_at": "2025-08-20T13:49:47.000000Z",
      "updated_at": "2025-08-20T13:49:47.000000Z"
    }
  }
  ```

### Login User
- **Endpoint**: `POST {{base_url}}/login`
- **Body Parameters**:
  ```json
  {
    "email": "john@example.com",
    "password": "secret123"
  }
  ```
- **Response**:
  ```json
  {
    "message": "Login successful!",
    "access_token": "<token>",
    "token_type": "Bearer",
    "user": {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com"
    }
  }
  ```

### Get Authenticated User
- **Endpoint**: `GET {{base_url}}/me`
- **Headers**:
  ```
  Authorization: Bearer <token>
  ```
- **Response**:
  ```json
  {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com"
  }
  ```

### Logout User
- **Endpoint**: `POST {{base_url}}/logout`
- **Headers**:
  ```
  Authorization: Bearer <token>
  ```
- **Response**:
  ```json
  {
    "message": "Logged out successfully"
  }
  ```

---

## 👤 Guests
- **Get All Guests** → `GET {{base_url}}/guests`
- **Create Guest** → `POST {{base_url}}/guests`
- **Get Guest by ID** → `GET {{base_url}}/guests/{id}`
- **Update Guest** → `PUT {{base_url}}/guests/{id}`
- **Delete Guest** → `DELETE {{base_url}}/guests/{id}`

---

## 🏠 Rooms
- **Get All Rooms** → `GET {{base_url}}/rooms`
- **Create Room** → `POST {{base_url}}/rooms`
- **Get Room by ID** → `GET {{base_url}}/rooms/{id}`
- **Update Room** → `PUT {{base_url}}/rooms/{id}`
- **Delete Room** → `DELETE {{base_url}}/rooms/{id}`

---

## 🛠 Amenities
- **Get All Amenities** → `GET {{base_url}}/amenities`
- **Create Amenity** → `POST {{base_url}}/amenities`
- **Get Amenity by ID** → `GET {{base_url}}/amenities/{id}`
- **Update Amenity** → `PUT {{base_url}}/amenities/{id}`
- **Delete Amenity** → `DELETE {{base_url}}/amenities/{id}`

---

## 📅 Bookings
- **Get All Bookings** → `GET {{base_url}}/bookings`
- **Create Booking** → `POST {{base_url}}/bookings`
- **Get Booking by ID** → `GET {{base_url}}/bookings/{id}`
- **Update Booking** → `PUT {{base_url}}/bookings/{id}`
- **Delete Booking** → `DELETE {{base_url}}/bookings/{id}`

---

## 🎩 Concierge Requests
- **Get All Concierge Requests** → `GET {{base_url}}/concierge-requests`
- **Create Concierge Request** → `POST {{base_url}}/concierge-requests`
- **Get Concierge Request by ID** → `GET {{base_url}}/concierge-requests/{id}`
- **Update Concierge Request** → `PUT {{base_url}}/concierge-requests/{id}`
- **Delete Concierge Request** → `DELETE {{base_url}}/concierge-requests/{id}`

---

## 🧾 Invoices
- **Get All Invoices** → `GET {{base_url}}/invoices`
- **Create Invoice** → `POST {{base_url}}/invoices`
- **Get Invoice by ID** → `GET {{base_url}}/invoices/{id}`
- **Update Invoice** → `PUT {{base_url}}/invoices/{id}`
- **Delete Invoice** → `DELETE {{base_url}}/invoices/{id}`

