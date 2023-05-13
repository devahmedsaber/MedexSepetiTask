<?php

namespace App\Classes;

use Illuminate\Http\JsonResponse;

class ResponseBuilder
{
    private $data;
    private int $statusCode = 200;
    private string $status = 'success';
    private array $errors = [];
    private array $meta = [];

    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'error';

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return $this
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getMeta(): array
    {
        return $this->meta;
    }

    /**
     * @param array $meta
     */
    public function setMeta(array $meta): self
    {
        $this->meta = $meta;
        return $this;
    }

    public function response(): JsonResponse
    {
        $response = [];

        if ($this->getStatusCode() >= 400){
            $this->setStatus(self::STATUS_ERROR);
        }

        $response['status'] = $this->getStatus();

        if ($this->getStatus() !== JsonResponse::HTTP_OK && !empty($this->getErrors())){
            $response['errors'] = $this->getErrors();
        }

        if ($this->getStatus() === self::STATUS_SUCCESS){
            $response['data'] = $this->getData();
        }

        return response()->json($response, $this->getStatusCode());
    }
}
